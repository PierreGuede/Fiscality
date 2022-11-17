<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\FinancialCostConditions\FinancialCostCondition;
use App\Fiscality\FinancialCostInterests\FinancialCostInterest;
use App\Fiscality\FinancialCosts\FinancialCost;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;

class DetailFinancialCost extends Component
{
    public $financialCost;

    public $rate = 4;

    public $inputs;

    public $company;

    public $lib_condition;

    public $delay_condition;

    public $accounting_result;

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

    public function mount($company)
    {
        $this->financialCost = [];
        $this->company = $company;
        $this->accounting_result = AccountingResult::whereCompanyId( $this->company->id)->whereYear('created_at', Carbon::now()->year)->first();


        $this->fill([
            'inputs' => collect($this->financialCost),
        ]);
    }

    public function render()
    {
        return view('livewire.other-reintegration.detail-financial-cost');
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

        DB::beginTransaction();

        try {

        $maximum_rate = $this->bceao_interest_rate_for_the_year + (3 / 100);
        $rate_surplus = $this->interest_rate_charged - $maximum_rate;
        $amount_reintegrated = ($this->amount_interest_recorded * $rate_surplus) / $this->interest_rate_charged;
        $deductible_interest_amount = $this->amount_of_interest_recorded - $amount_reintegrated;
        $calculation_base = array_sum([$this->accounting_result->ar_value,
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
            'profit_before_tax' => $this->accounting_result->ar_value,
            'interest_accrued' => $this->amount_of_interest_recorded,
            'depreciation_and_amortization' => $this->depreciation_and_amortization,
            'allocations_to_provisions' => $this->allocations_to_provisions,
            'calculation_base' => $calculation_base,
            'deductibility_limit' => $deductibility_limit,
            'amount_reintegrate' => $reintegrate_amount > 0 ? $reintegrate_amount : '0',
            'financial_cost_id' => $financialCost->id,
        ]);

        Db::commit();
        $this->emit('refresh');


        $this->closeASide();
        } catch (\Throwable $e) {
            DB::rollBack();
        }

    }
}
