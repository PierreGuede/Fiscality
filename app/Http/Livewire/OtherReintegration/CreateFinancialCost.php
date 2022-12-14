<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\FinancialCostConditions\FinancialCostCondition;
use App\Fiscality\FinancialCostInterests\FinancialCostInterest;
use App\Fiscality\FinancialCosts\FinancialCost;
use App\Http\Livewire\OtherReintegrationSettingHandler;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;

class CreateFinancialCost extends Component
{
    public $financialCost;

    public $rate = 4;

    public  $bceao_interest_rate = 4 ;
    public  $rate_deductibility_limit = 30;
    public  $minimum_rate = 3 ;

    public $inputs;

    public $company;

    public $lib_condition;

    public $delay_condition;

    public $rc;

    public bool  $open_a_side = false;

    public string  $response = 'no';

    public $bceao_interest_rate_for_the_year;

    public $interest_rate_charged;

    public $amount_interest_recorded;

    public $amount_of_interest_recorded;

    public $interest_accrued;

    public $depreciation_and_amortization;

    public $allocations_to_provisions;

    public $amount_contribution;

    protected $listeners = ['openASide', 'closeASide'];

    protected $rules = [
        'amount_contribution' => 'required|numeric',
        'amount_interest_recorded' => 'required|numeric',
        'interest_rate_charged' => 'required|numeric',
        'depreciation_and_amortization' => 'required|numeric',
        'allocations_to_provisions' => 'required|numeric',
        'amount_of_interest_recorded' => 'required|numeric',
    ];

    protected $messages = [
        'amount_contribution.required' => 'Le champ est requis',
        'amount_contribution.numeric' => 'Ce champs doit etre un entier',
        'amount_interest_recorded.required' => 'Le champ est requis',
        'amount_interest_recorded.numeric' => 'Ce champs doit etre un entier',
        'interest_rate_charged.required' => 'Le champ est requis',
        'interest_rate_charged.numeric' => 'Ce champs doit etre un entier',
        'depreciation_and_amortization.required' => 'Le champ est requis',
        'depreciation_and_amortization.numeric' => 'Ce champs doit etre un entier',
        'allocations_to_provisions.required' => 'Le champ est requis',
        'allocations_to_provisions.numeric' => 'Ce champs doit etre un entier',
        'amount_of_interest_recorded.required' => 'Le champ est requis',
        'amount_of_interest_recorded.numeric' => 'Ce champs doit etre un entier',
    ];

    public function mount($company)
    {
        $otherReintegrationSetting = OtherReintegrationSettingHandler::getValue($company->id);
        $this->rate_deductibility_limit = $otherReintegrationSetting->rate_deductibility_limit;
        $this->bceao_interest_rate = $otherReintegrationSetting->bceao_interest_rate;
        $this->minimum_rate = $otherReintegrationSetting->minimum_rate;

        $this->financialCost = [];
        $this->company = $company;
        $this->rc = AccountingResult::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->fill([
            'inputs' => collect($this->financialCost),
        ]);
    }

    public function render()
    {
        return view('livewire.other-reintegration.create-financial-cost');
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
        $maximum_rate = $this->bceao_interest_rate_for_the_year + (3 / 100);
        $rate_surplus = $this->interest_rate_charged - $maximum_rate;
        $amount_reintegrated = ($this->amount_interest_recorded * $rate_surplus) / $this->interest_rate_charged;
        $deductible_interest_amount = $this->amount_of_interest_recorded - $amount_reintegrated;
        $calculation_base = array_sum([$this->rc?->ar_value,
            $this->interest_accrued,
            $this->depreciation_and_amortization,
            $this->allocations_to_provisions, ]);
        $deductibility_limit = $calculation_base * 0.3;
        $reintegrate_amount = $deductible_interest_amount - $deductibility_limit;
        $financialCost = FinancialCost::create([
            'name' => Str::slug('Frais financier de la compagnie '.$this->company->name, '_'),
            'total_amount_reintegrated' => array_sum([$reintegrate_amount ? $reintegrate_amount < 0 : 0, max([$amount_reintegrated, $this->lib_condition, $this->delay_condition])]),
            'condition_amount_reintegrated' => $reintegrate_amount ? $reintegrate_amount < 0 : 0,
            'interest_amount_reintegrated' => max([$amount_reintegrated, $this->lib_condition, $this->delay_condition]),
            'date' => date('Y'),
            'company_id' => $this->company->id,
        ]);

        FinancialCostInterest::create([
            'type' => FinancialCostInterest::LIBERATION_CONDITION,
            'amount_reintegrated' => ! empty($this->lib_condition) ? $this->lib_condition : 0,
            'amount_contribution' => 0,
            'amount_interest_recorded' => 0,
            'interest_rate_charged' => 0,
            'bceao_interest_rate_for_the_year' => 0, /* excess_rate_charged */
            'maximum_rate' => 0,
            'rate_surplus' => 0,
            'financial_cost_id' => $financialCost->id,
        ]);
        FinancialCostInterest::create([
            'type' => FinancialCostInterest::DELAY_CONDITION,
            'amount_reintegrated' => ! empty($this->delay_condition) ? $this->delay_condition : 0,
            'amount_contribution' => 0,
            'amount_interest_recorded' => 0,
            'interest_rate_charged' => 0,
            'bceao_interest_rate_for_the_year' => 0, /* excess_rate_charged */
            'maximum_rate' => 0,
            'rate_surplus' => 0,
            'financial_cost_id' => $financialCost->id,

        ]);

        FinancialCostInterest::create([
            'type' => FinancialCostInterest::RATE_CONDITION,
            'amount_reintegrated' => $amount_reintegrated,
            'amount_contribution' => $this->amount_contribution,
            'amount_interest_recorded' => $this->amount_interest_recorded,
            'interest_rate_charged' => $this->interest_rate_charged,
            'bceao_interest_rate_for_the_year' => $this->bceao_interest_rate_for_the_year, /* excess_rate_charged */
            'maximum_rate' => $maximum_rate,
            'rate_surplus' => $rate_surplus,
            'financial_cost_id' => $financialCost->id,
        ]);

        FinancialCostCondition::create([
            'amount_of_interest_recorded' => $this->amount_of_interest_recorded,
            'non_deductible_interest_amount' => $amount_reintegrated,
            'deductible_interest_amount' => $deductible_interest_amount,
            'profit_before_tax' => is_null($this->rc) ? 0 : $this->rc->ar_value,
            'interest_accrued' => $this->amount_of_interest_recorded,
            'depreciation_and_amortization' => $this->depreciation_and_amortization,
            'allocations_to_provisions' => $this->allocations_to_provisions,
            'calculation_base' => $calculation_base,
            'deductibility_limit' => $deductibility_limit,
            'amount_reintegrate' => $reintegrate_amount > 0 ? $reintegrate_amount : '0',
            'financial_cost_id' => $financialCost->id,
        ]);

        $this->emit('refresh');

        $this->closeASide();
    }
}
