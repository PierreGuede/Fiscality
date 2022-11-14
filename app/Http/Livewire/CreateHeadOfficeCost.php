<?php

namespace App\Http\Livewire;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\AmortizationDetails\AmortizationDetails;
use App\Fiscality\Companies\Company;
use App\Fiscality\Depreciations\Depreciation;
use App\Fiscality\Excesss\Excess;
use App\Fiscality\Vehicles\Vehicle;
use App\Models\AccuredChargeCompany;
use App\Models\HeadOfficeCost;
use App\Models\HeadOfficeCostDetail;
use App\Models\OtherReintegration;
use Carbon\Carbon;
use Livewire\Component;

class CreateHeadOfficeCost extends Component
{
    public Company $company;

    public $inputs = [];
    public $account_result = 0;
    public $total_reintegration = 0;
    public $total_deduction = 0;
    public $taxable_income_before_restatement_head_office_costs = 0;
    public $basis_calculating_compensation_limit = 0;
    public $deductible_head_office_cost = 0;
    public $non_deductible_head_office_costs = 0;

    public $rules = [
        'inputs.*.account' => 'required|distinct|min:1',
        'inputs.*.name' => 'required',
        'inputs.*.amount' => 'required|min:1',
         'taxable_income_before_restatement_head_office_costs' => 'required|min:1',
         'basis_calculating_deduction_limit' => 'required|min:1',
         'deductible_head_office_costs' => 'required|min:1',
         'non_deductible_head_office_costs' => 'required|min:1',
    ];


    public $message = [
        'inputs.*.account.required' => 'champ obligatoire',
        'inputs.*.name.required' => 'champ obligatoire',
        'inputs.*.amount.required' => 'champ obligatoire',
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



        $this->fill([
            'inputs' => collect([]),
            'account_result' => is_null($account_result) ? 0 : $account_result->ar_value,
            'total_reintegration' => $this->totalReintegration()
        ]);
    }

    public function render()
    {
        return view('livewire.create-head-office-cost');
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
//        'expense_not_related',
//        'unjustfified_expense',
//        'remuneration_not_subject_withholding_tax',
//        'financial_cost',
//        'commission_on_purchase',
//        'commission_insurance_broker',
//        'redevance',
//        'accountind_financial_technical_assistance_costs',
//        'interest_paid',
//        'donation_grant_contribution',
//        'advertising_gift',
//        'sumptuary_expenses',
//        'occult_remuneration',
//        'motor_vehicle_tax',
//        'income_tax',
//        'fines_penalities',
//        'past_assets',
//        'other_non_deductible_expense',
//        'variation_conversation_gap',
//        'excess_rent',
//        'other_non_deductible_expenses',
//        'total_amount',
        $total = OtherReintegration::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();



            return is_null($total) ? 0 : $total->total_amount;
    }

    public function totalReintegration() {
        return $this->totalAmortization() + $this->totalAccuredCharge() + $this->totalOtherReintegration();
    }

    public function save()
    {
        $this->validate();
        dd($this->inputs);

        $head_office_cost =   HeadOfficeCost::create([
            'account_result' => $this->account_result,
            'total_reintegration' => $this->total_reintegration,
            'total_deduction' => $this->total_reintegration,
            'taxable_income_before_restatement_head_office_costs' => $this->taxable_income_before_restatement_head_office_costs,
            'basis_calculating_deduction_limit' => $this->basis_calculating_compensation_limit ,
            'deductible_head_office_costs' => $this->deductible_head_office_cost,
            'non_deductible_head_office_costs' => $this->non_deductible_head_office_costs,
            'company_id' => $this->company->id,
        ]);

        for ($i = 0; $i < count($this->inputs); $i++) {
            HeadOfficeCostDetail::create([
                'account' => $this->inputs[$key]['account'],
                'name' => $this->inputs[$key]['name'],
                'amount' => $this->inputs[$key]['amount'],
                'company_id' => $this->company->id,
                'head_office_cost_id' => $head_office_cost->id
            ]);
        }
    }
}
