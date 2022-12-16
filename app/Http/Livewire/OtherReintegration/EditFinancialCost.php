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
    /* 'inputs2' => collect($this->financialCostInterest1),
            'inputs3' => collect($this->financialCostInterest2),
            'inputs4' => collect($this->financialCostInterest3), */
    public $financialCost;

    public $financialCostCondition;

    public $financialCostInterest1;

    public $financialCostInterest2;

    public $financialCostInterest3;

    public $rate = 4;

    public $inputs;
    public $inputs_one;
    public $inputs_two;
    public $inputs_three;
    public $company;

    public $lib_condition;

    public $delay_condition;

    public $rc;

    public bool  $open_a_side = false;

    public string  $response = 'no';

    protected $listeners = ['openASide', 'closeASide'];

    protected $rules = [

        'inputs.amount_reintegrated'=>'required',
        'inputs_one.amount_reintegrated'=>'required',

        'inputs_two.amount_contribution'=>'required',
        'inputs_two.amount_contribution'=>'required',
        'inputs_two.amount_interest_recorded'=>'required',
        'inputs_two.interest_rate_charged'=>'required',
        'inputs_two.bceao_interest_rate_for_the_year'=>'required',

        'inputs_three.amount_of_interest_recorded'=>'required',
        'inputs_three.depreciation_and_amortization'=>'required',
        'inputs_three.allocations_to_provisions'=>'required',
        'inputs_three.interest_accrued'=>'required',
    ];
    public function mount($company)
    {
        $this->financialCost = FinancialCost::whereCompanyId($this->company->id)->where('date',date('Y'))->first();
        $this->inputs=$this->financialCost->financialCostInterest[0];
        $this->inputs_one=$this->financialCost->financialCostInterest[1];
        $this->inputs_two=$this->financialCost->financialCostInterest[2];
        $this->inputs_three=$this->financialCost->financialCostCondition;
        $this->company = $company;
        $this->rc = AccountingResult::where('company_id', $this->company->id)->first();

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
        $this->validate();
        $maximum_rate = $this->inputs_two['bceao_interest_rate_for_the_year'] + (3 / 100);
        $rate_surplus = $this->inputs_two['interest_rate_charged'] - $maximum_rate;
        $amount_reintegrated = ($this->inputs_two['amount_interest_recorded'] * $rate_surplus) / $this->inputs_two['interest_rate_charged'];
        $deductible_interest_amount = $this->inputs_three['amount_of_interest_recorded'] - $amount_reintegrated;
        $calculation_base = array_sum([$this->rc?->ar_value,
            $this->inputs_three['interest_accrued'],
            $this->inputs_three['depreciation_and_amortization'],
            $this->inputs_three['allocations_to_provisions'], ]);
        $deductibility_limit = $calculation_base * 0.3;
        $reintegrate_amount = $deductible_interest_amount - $deductibility_limit;
        $this->financialCost->update([
            'total_amount_reintegrated' => array_sum([$reintegrate_amount ? $reintegrate_amount < 0 : 0, max([$amount_reintegrated,$this->inputs['amount_reintegrated'], $this->inputs_two['amount_reintegrated']])]),
            'condition_amount_reintegrated' => $reintegrate_amount ? $reintegrate_amount < 0 : 0,
            'interest_amount_reintegrated' => max([$amount_reintegrated, $this->inputs['amount_reintegrated'],$this->inputs_two['amount_reintegrated']]),
        ]);

        $this->financialCost->financialCostInterest[0]->update([
            'amount_reintegrated' =>$this->inputs['amount_reintegrated'] ,
        ]);
        $this->financialCost->financialCostInterest[1]->update([
            'amount_reintegrated' =>$this->inputs['amount_reintegrated'] ,
        ]);

        $this->financialCost->financialCostInterest[2]->update([
            'amount_reintegrated' => $amount_reintegrated,
            'amount_contribution' => $this->inputs_two['amount_contribution'],
            'amount_interest_recorded' => $this->inputs_two['amount_interest_recorded'],
            'interest_rate_charged' => $this->inputs_two['interest_rate_charged'],
            'bceao_interest_rate_for_the_year' => $this->inputs_two['bceao_interest_rate_for_the_year'], /* excess_rate_charged */
            'maximum_rate' => $maximum_rate,
            'rate_surplus' => $rate_surplus,
        ]);

        $this->inputs_three=$this->financialCost->financialCostCondition->update([
            'amount_of_interest_recorded' => $this->inputs_three['amount_of_interest_recorded'],
            'non_deductible_interest_amount' => $amount_reintegrated,
            'deductible_interest_amount' => $deductible_interest_amount,
            'profit_before_tax' => $this->rc!=null ? $this->rc->ar_value : 0,
            'interest_accrued' => $this->inputs_three['amount_of_interest_recorded'],
            'depreciation_and_amortization' => $this->inputs_three['depreciation_and_amortization'],
            'allocations_to_provisions' => $this->inputs_three['allocations_to_provisions'],
            'calculation_base' => $calculation_base,
            'deductibility_limit' => $deductibility_limit,
            'amount_reintegrate' => $reintegrate_amount > 0 ? $reintegrate_amount : '0',
        ]);

        $this->emit('refresh');

        $this->closeASide();
    }
}
