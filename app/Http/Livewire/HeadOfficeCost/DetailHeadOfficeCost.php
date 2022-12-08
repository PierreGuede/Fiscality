<?php

namespace App\Http\Livewire\HeadOfficeCost;

use App\Fiscality\Companies\Company;
use App\Models\HeadOfficeCost;
use App\Models\HeadOfficeCostDetail;
use Carbon\Carbon;
use Livewire\Component;

class DetailHeadOfficeCost extends Component
{
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
    public $arr_sum;

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

        $head_office_cost = HeadOfficeCost::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $head_office_cost_detail = HeadOfficeCostDetail::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->get();
        $this->arr_sum = array_column($head_office_cost_detail->toArray(), 'amount');
        $this->fill([
            'inputs' => collect($head_office_cost_detail),
            'account_result' => $head_office_cost->account_result,
            'total_reintegration' => $head_office_cost->total_reintegration,
            'total_deduction' => $head_office_cost->total_deduction,
            'taxable_income_before_restatement_head_office_costs' => $head_office_cost->taxable_income_before_restatement_head_office_costs,
            'basis_calculating_deduction_limit' => $head_office_cost->basis_calculating_deduction_limit,
            'deductible_head_office_costs' => $head_office_cost->deductible_head_office_costs,
            'non_deductible_head_office_costs' => $head_office_cost->non_deductible_head_office_costs,
        ]);
    }

    public function render()
    {
        return view('livewire.head-office-cost.detail-head-office-cost');
    }

    public function save()
    {
        $this->validate();

        $total_amount = $this->processDataTotalAmount($this->inputs);
    }
}
