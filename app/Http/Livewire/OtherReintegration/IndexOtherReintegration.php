<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\AdvertisingGifts\AdvertisingGift;
use App\Fiscality\AssistanceCosts\AssistanceCost;
use App\Fiscality\CommissionOnPurchases\CommissionOnPurchase;
use App\Fiscality\Companies\Company;
use App\Fiscality\ExcessRents\ExcessRent;
use App\Fiscality\FinancialCosts\FinancialCost;
use App\Fiscality\Redevances\Redevance;
use App\Models\DonationGrantContribution;
use App\Models\OtherReintegration;
use Carbon\Carbon;
use Livewire\Component;

class IndexOtherReintegration extends Component
{
    const CREATE = 'CREATE';

    const EDIT = 'EDIT';

    const READ = 'READ';

    public $state = self::CREATE;

    public Company $company;

    public OtherReintegration $other_reintegration;

    public $expense_not_related;

    public $unjustfified_expense;

    public $remuneration_not_subject_withholding_tax;

    public $financial_cost;

    public $commission_on_purchase;

    public $commission_insurance_broker;

    public $redevance;

    public $accountind_financial_technical_assistance_costs;

    public $interest_paid;

    public $donation_grant_contribution;

    public $advertising_gift;

    public $sumptuary_expenses;

    public $occult_remuneration;

    public $motor_vehicle_tax;

    public $income_tax;

    public $fines_penalities;

    public $past_assets;

    public $other_non_deductible_expense;

    public $variation_conversation_gap;

    public $excess_rent;

    public $other_non_deductible_expenses;

    public $listeners = ['refreshState', 'refreshOtherReintegrationData'];

    public function mount($company)
    {
        $this->company = $company;

        $this->other_reintegration = OtherReintegration::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        $this->fill([
            'state' => is_null($this->other_reintegration) ? self::CREATE : self::READ,
        ]);
    }

    public function render()
    {
        return view('livewire.other-reintegration.index-other-reintegration');
    }

    public function refreshOtherReintegrationData()
    {
        $this->refresh();

        $data = [
            'expense_not_related' => $this->other_reintegration->expense_not_related,
            'unjustfified_expense' => $this->other_reintegration->unjustfified_expense,
            'remuneration_not_subject_withholding_tax' => $this->other_reintegration->remuneration_not_subject_withholding_tax,
            'financial_cost' => $this->financial_cost,
            'commission_on_purchase' => $this->commission_on_purchase,
            'commission_insurance_broker' => $this->other_reintegration->commission_insurance_broker,
            'redevance' => $this->redevance,
            'accountind_financial_technical_assistance_costs' => $this->accountind_financial_technical_assistance_costs,
            'interest_paid' => $this->other_reintegration->interest_paid,
            'donation_grant_contribution' => $this->donation_grant_contribution,
            'advertising_gift' => $this->advertising_gift,
            'sumptuary_expenses' => $this->other_reintegration->sumptuary_expenses,
            'occult_remuneration' => $this->other_reintegration->occult_remuneration,
            'motor_vehicle_tax' => $this->other_reintegration->motor_vehicle_tax,
            'income_tax' => $this->other_reintegration->income_tax,
            'fines_penalities' => $this->other_reintegration->fines_penalities,
            'past_assets' => $this->other_reintegration->past_assets,
            'other_non_deductible_expense' => $this->other_reintegration->other_non_deductible_expense,
            'variation_conversation_gap' => $this->other_reintegration->variation_conversation_gap,
            'excess_rent' => $this->excess_rent,
            'other_non_deductible_expenses' => $this->other_reintegration->other_non_deductible_expenses,
        ];

        $this->other_reintegration->fill([
            'expense_not_related' => $this->other_reintegration->expense_not_related,
            'unjustfified_expense' => $this->other_reintegration->unjustfified_expense,
            'remuneration_not_subject_withholding_tax' => $this->other_reintegration->remuneration_not_subject_withholding_tax,
            'financial_cost' => $this->financial_cost,
            'commission_on_purchase' => $this->commission_on_purchase,
            'commission_insurance_broker' => $this->other_reintegration->commission_insurance_broker,
            'redevance' => $this->redevance,
            'accountind_financial_technical_assistance_costs' => $this->accountind_financial_technical_assistance_costs,
            'interest_paid' => $this->other_reintegration->interest_paid,
            'donation_grant_contribution' => $this->donation_grant_contribution,
            'advertising_gift' => $this->advertising_gift,
            'sumptuary_expenses' => $this->other_reintegration->sumptuary_expenses,
            'occult_remuneration' => $this->other_reintegration->occult_remuneration,
            'motor_vehicle_tax' => $this->other_reintegration->motor_vehicle_tax,
            'income_tax' => $this->other_reintegration->income_tax,
            'fines_penalities' => $this->other_reintegration->fines_penalities,
            'past_assets' => $this->other_reintegration->past_assets,
            'other_non_deductible_expense' => $this->other_reintegration->other_non_deductible_expense,
            'variation_conversation_gap' => $this->other_reintegration->variation_conversation_gap,
            'excess_rent' => $this->excess_rent,
            'other_non_deductible_expenses' => $this->other_reintegration->other_non_deductible_expenses,
            'total_amount' => array_sum($data),
        ]);

        $this->other_reintegration->save();
    }

    public function refreshState()
    {
        $this->state = self::READ;
    }

    public function changeState()
    {
        $this->state = $this->state == self::EDIT ? self::READ : self::EDIT;
    }

    public function refreshFinancialCost()
    {
        $data = FinancialCost::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->financial_cost = is_null($data) ? 0 : $data->total_amount_reintegrated;
    }

    public function refreshCommissionOnPurchase()
    {
        $data = CommissionOnPurchase::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->commission_on_purchase = is_null($data) ? 0 : $data->renseigned_commission;
    }

    public function refreshRedevance()
    {
        $data = Redevance::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->redevance = is_null($data) ? 0 : $data->amount_reintegrated;
    }

    public function refreshAccountingFinancialTechnicalAssistanceCosts()
    {
        $data = AssistanceCost::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->accountind_financial_technical_assistance_costs = is_null($data) ? 0 : $data->reintegrate_amount;
    }

    public function refreshDonationGrantContribution()
    {
        $data = DonationGrantContribution::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->donation_grant_contribution = is_null($data) ? 0 : $data->surplus_state;
    }

    public function refreshAdvertisingGift()
    {
        $data = AdvertisingGift::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->advertising_gift = is_null($data) ? 0 : $data->surplus_reintegrated;
    }

    public function refreshExcessRent()
    {
        $data = ExcessRent::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->excess_rent = is_null($data) ? 0 : $data->amount_rent_reintegrated;
    }

    public function refresh()
    {
        $this->refreshFinancialCost();
        $this->refreshCommissionOnPurchase();
        $this->refreshRedevance();
        $this->refreshAccountingFinancialTechnicalAssistanceCosts();
        $this->refreshDonationGrantContribution();
        $this->refreshAdvertisingGift();
        $this->refreshExcessRent();
    }
}
