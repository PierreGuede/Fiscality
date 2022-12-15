<?php

namespace App\Http\Livewire\HeadOfficeCost;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\Companies\Company;
use App\Fiscality\Depreciations\Depreciation;
use App\Fiscality\Excesss\Excess;
use App\Fiscality\Vehicles\Vehicle;
use App\Models\AccuredChargeCompany;
use App\Models\Deduction;
use App\Models\HeadOfficeCost;
use App\Models\HeadOfficeCostDetail;
use App\Models\OtherReintegration;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Livewire\Component;
use WireUi\Traits\Actions;

class CreateHeadOfficeCost extends Component
{
    use Actions;

    public Company $company;

    public $rate = 10;

    public $inputs = [];

    public $account_result = 0;

    public $total_reintegration = 0;

    public $total_deduction = 0;

    public $taxable_income_before_restatement_head_office_costs = 0;

    public $basis_calculating_deduction_limit = 0;

    public $deductible_head_office_costs = 0;

    public $non_deductible_head_office_costs = 0;

    public $rules = [
        'inputs.*.account' => 'required|distinct|min:1',
        'inputs.*.name' => 'required',
        'inputs.*.amount' => 'required|min:1',
        'rate' => 'required|integer|min:0|max:100',
        'taxable_income_before_restatement_head_office_costs' => 'required|min:1',
        'basis_calculating_deduction_limit' => 'required|min:1',
        'deductible_head_office_costs' => 'required|min:1',
        'non_deductible_head_office_costs' => 'required|min:1',
    ];

    public $message = [
        'inputs.*.account.required' => 'champ obligatoire',
        'inputs.*.name.required' => 'champ obligatoire',
        'inputs.*.amount.required' => 'champ obligatoire',
        'rate.required' => 'champ obligatoire',
        'rate.min' => 'incohérent',
        'rate.max' => 'incohérent',
        'taxable_income_before_restatement_head_office_costs.required' => 'champ obligatoire',
        'basis_calculating_deduction_limit.required' => 'champ obligatoire',
        'deductible_head_office_costs.required' => 'champ obligatoire',
        'non_deductible_head_office_costs.required' => 'champ obligatoire',
    ];

    public function add()
    {
        $this->inputs->push(['account' => '', 'name' => '', 'amount' => '']);
    }

    public function remove($key)
    {
        $this->inputs->pull($key);
    }

    public function mount(Company $company)
    {
        $this->company = $company;
        $account_result = AccountingResult::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        $taxable_income_before_restatement_head_office_costs = (is_null($account_result) ? 0 : $account_result->ar_value) + $this->totalReintegration() - $this->totalDeduction();

        $this->inputs = collect([]);
        $this->add();

        $this->fill([
            'account_result' => is_null($account_result) ? 0 : $account_result->ar_value,
            'total_reintegration' => $this->totalReintegration(),
            'total_deduction' => $this->totalDeduction(),
            'taxable_income_before_restatement_head_office_costs' => $taxable_income_before_restatement_head_office_costs,
        ]);
    }

    public function render()
    {
        return view('livewire.head-office-cost.create-head-office-cost');
    }

    public function totalAmortization()
    {
        $total_vehicle = Vehicle::where('company_id', $this->company->id)->sum('deductible_amortization');
        $total_excess = Excess::where('company_id', $this->company->id)->sum('deductible_amortization');
        $total_depreciation = Depreciation::where('company_id', $this->company->id)->sum('dotation');

        return $total_vehicle + $total_depreciation + $total_excess;
    }

    public function totalAccuredCharge()
    {
        $total = AccuredChargeCompany::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->sum('amount');

        return $total;
    }

    public function totalOtherReintegration()
    {
        $total = OtherReintegration::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        return is_null($total) ? 0 : $total->total_amount;
    }

    public function totalReintegration()
    {
        return $this->totalAmortization() + $this->totalAccuredCharge() + $this->totalOtherReintegration();
    }

    public function totalDeduction()
    {
        $total = Deduction::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        return is_null($total) ? 0 : $total->total_deduction;
    }

    private function processDataTotalAmount(Collection $data): float
    {
        $total_amount = 0;
        for ($i = 0; $i < count($data); $i++) {
            $total_amount += (float) $data[$i]['amount'];
        }

        return $total_amount;
    }

    public function save()
    {
        $this->validate();

        $total_amount = $this->processDataTotalAmount($this->inputs);

        $taxable_income_before_restatement_head_office_costs = $this->account_result + $this->totalReintegration() - $this->totalDeduction();
        $basis_calculating_deduction_limit = $total_amount + $this->taxable_income_before_restatement_head_office_costs;
        $deductible_head_office_costs = $basis_calculating_deduction_limit * ((float) $this->rate / 100);
        $non_deductible_head_office_costs = $total_amount - $deductible_head_office_costs;

        $head_office_cost = HeadOfficeCost::create([
            'account_result' => $this->account_result,
            'total_reintegration' => $this->total_reintegration,
            'total_deduction' => $this->total_deduction,
            'taxable_income_before_restatement_head_office_costs' => $taxable_income_before_restatement_head_office_costs,
            'basis_calculating_deduction_limit' => $basis_calculating_deduction_limit,
            'deductible_head_office_costs' => $deductible_head_office_costs,
            'non_deductible_head_office_costs' => $non_deductible_head_office_costs,
            'company_id' => $this->company->id,
        ]);

        for ($i = 0; $i < count($this->inputs); $i++) {
            HeadOfficeCostDetail::create([
                'account' => $this->inputs[$i]['account'],
                'name' => $this->inputs[$i]['name'],
                'amount' => $this->inputs[$i]['amount'],
                'company_id' => $this->company->id,
                'head_office_cost_id' => $head_office_cost->id,
            ]);
        }

        $this->emit('refreshState');
    }
}
