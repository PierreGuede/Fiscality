<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\FinancialCostConditions\FinancialCostCondition;
use App\Fiscality\FinancialCostInterests\FinancialCostInterest;
use App\Fiscality\FinancialCosts\FinancialCost;
use Illuminate\Support\Str;
use Livewire\Component;

class EditFinancialCost extends Component
{
    public $financialCost;

    public $rate = 4;

    public $financialCostId;

    public $inputsliberation_condition;

    public $inputsdelay_condition;

    public $inputsrate_condition;

    public $inputsFinancialCondition;

    public $inputs;

    public $company;

    public $lib_condition;

    public $delay_condition;

    public $rc;

    public bool  $open_a_side = false;

    public string  $response = 'no';

    protected $listeners = ['openASide', 'closeASide'];

    public function mount($company)
    {
        $this->inputsliberation_condition=FinancialCostInterest::where('type','liberation_condition')->whereYear('created_at', date('Y'))->first();

        $this->inputsdelay_condition=FinancialCostInterest::where('type','delay_condition')->whereYear('created_at', date('Y'))->first();

        $this->inputsrate_condition=FinancialCostInterest::where('type','rate_condition')->whereYear('created_at', date('Y'))->first();
        $this->inputsFinancialCondition=FinancialCostCondition::whereCompanyId($company->id)->whereYear('created_at',date('Y'))->first();
        $this->financialCost = [];
        $this->company = $company;
        $this->rc = AccountingResult::where('company_id', $this->company->id)->first();
        $this->fill([
            'inputs' => collect($this->financialCost),
        ]);
    }

    public function render()
    {
        return view('livewire.other-reintegration.edit-financial-cost');
    }

    public function openASide()
    {
        $this->open_a_side = true;
    }

    public function closeASide()
    {
        $this->open_a_side = false;
    }

    public function store()
    {
        $maximum_rate = $this->inputs['bceao_interest_rate_for_the_year'] + (3 / 100);
        $rate_surplus = $this->inputs['interest_rate_charged'] - $maximum_rate;
        $amount_reintegrated = ($this->inputs['amount_interest_recorded'] * $rate_surplus) / $this->inputs['interest_rate_charged'];
        $deductible_interest_amount = $this->inputs['amount_of_interest_recorded'] - $amount_reintegrated;
        $calculation_base = array_sum([$this->rc->ar_value,
            $this->inputs['interest_accrued'],
            $this->inputs['depreciation_and_amortization'],
            $this->inputs['allocations_to_provisions'], ]);
        $deductibility_limit = $calculation_base * 0.3;
        $reintegrate_amount = $deductible_interest_amount - $deductibility_limit;
        
        $this->inputsliberation_condition->update([
            'amount_reintegrated' => ! empty($this->lib_condition) ? $this->lib_condition : 0,
            'amount_contribution' => 0,
            'amount_interest_recorded' => 0,
            'interest_rate_charged' => 0,
            'bceao_interest_rate_for_the_year' => 0, /* excess_rate_charged */
            'maximum_rate' => 0,
            'rate_surplus' => 0,
        ]);
        $this->inputsdelay_condition->update([
            'amount_reintegrated' => ! empty($this->delay_condition) ? $this->delay_condition : 0,
            'amount_contribution' => 0,
            'amount_interest_recorded' => 0,
            'interest_rate_charged' => 0,
            'bceao_interest_rate_for_the_year' => 0, /* excess_rate_charged */
            'maximum_rate' => 0,
            'rate_surplus' => 0,

        ]);

        $this->inputsrate_condition->update([
            'amount_reintegrated' => $amount_reintegrated,
            'amount_contribution' => $this->inputs['amount_contribution'],
            'amount_interest_recorded' => $this->inputs['amount_interest_recorded'],
            'interest_rate_charged' => $this->inputs['interest_rate_charged'],
            'bceao_interest_rate_for_the_year' => $this->inputs['bceao_interest_rate_for_the_year'], /* excess_rate_charged */
            'maximum_rate' => $maximum_rate,
            'rate_surplus' => $rate_surplus,
        ]);

        $this->inputsFinancialCondition->update([
            'amount_of_interest_recorded' => $this->inputs['amount_of_interest_recorded'],
            'non_deductible_interest_amount' => $amount_reintegrated,
            'deductible_interest_amount' => $deductible_interest_amount,
            'profit_before_tax' => $this->rc->ar_value,
            'interest_accrued' => $this->inputs['amount_of_interest_recorded'],
            'depreciation_and_amortization' => $this->inputs['depreciation_and_amortization'],
            'allocations_to_provisions' => $this->inputs['allocations_to_provisions'],
            'calculation_base' => $calculation_base,
            'deductibility_limit' => $deductibility_limit,
            'amount_reintegrate' => $reintegrate_amount > 0 ? $reintegrate_amount : '0',
        ]);

        $this->emit('refresh');

        $this->closeASide();
    }
}
