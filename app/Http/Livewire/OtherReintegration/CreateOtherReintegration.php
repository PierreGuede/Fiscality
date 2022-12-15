<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\AdvertisingGifts\AdvertisingGift;
use App\Fiscality\AssistanceCosts\AssistanceCost;
use App\Fiscality\CommissionOnPurchases\CommissionOnPurchase;
use App\Fiscality\ExcessRents\ExcessRent;
use App\Fiscality\FinancialCosts\FinancialCost;
use App\Fiscality\Redevances\Redevance;
use App\Models\DonationGrantContribution;
use App\Models\OtherReintegration;
use Carbon\Carbon;
use Livewire\Component;
use WireUi\Traits\Actions;

class CreateOtherReintegration extends Component
{
    use Actions;

    // TODO: Remove from here
    public $state = 'create';

    public $company;

    public $expense_not_related = 0;

    public $unjustfified_expense = 0;

    public $remuneration_not_subject_withholding_tax = 0;

    public $financial_cost = 0;

    public $commission_on_purchase = 0;

    public $commission_insurance_broker = 0;

    public $redevance = 0;

    public $accountind_financial_technical_assistance_costs;

    public $interest_paid = 0;

    public $donation_grant_contribution = 0;

    public $advertising_gift = 0;

    public $sumptuary_expenses = 0;

    public $occult_remuneration = 0;

    public $motor_vehicle_tax = 0;

    public $income_tax = 0;

    public $fines_penalities = 0;

    public $past_assets = 0;

    public $other_non_deductible_expense = 0;

    public $variation_conversation_gap = 0;

    public $excess_rent = 0;

    public $other_non_deductible_expenses = 0;

//Can edit
    public $can_edit_financial_cost = true;

    public $can_edit_commission_on_purchase = true;

    public $can_edit_redevance = true;

    public $can_edit_accounting_financial_technical_assistance_costs = true;

    public $can_edit_donation_grant_contribution = true;

    public $can_edit_advertising_gift = true;

    public $can_edit_excess_rent = true;

    public $listeners = ['refresh'];

    public $rules = [
        'expense_not_related' => 'required|min:1',
        'unjustfified_expense' => 'required|min:1',
        'remuneration_not_subject_withholding_tax' => 'required|min:1',
        'financial_cost' => 'required|min:1',
        'commission_on_purchase' => 'required|min:1',
        'commission_insurance_broker' => 'required|min:1',
        'redevance' => 'required|min:1',
        'accountind_financial_technical_assistance_costs' => 'required|min:1',
        'interest_paid' => 'required|min:1',
        'donation_grant_contribution' => 'required|min:1',
        'advertising_gift' => 'required|min:1',
        'sumptuary_expenses' => 'required|min:1',
        'occult_remuneration' => 'required|min:1',
        'motor_vehicle_tax' => 'required|min:1',
        'income_tax' => 'required|min:1',
        'fines_penalities' => 'required|min:1',
        'past_assets' => 'required|min:1',
        'other_non_deductible_expense' => 'required|min:1',
        'variation_conversation_gap' => 'required|min:1',
        'excess_rent' => 'required|min:1',
        'other_non_deductible_expenses' => 'required|min:1',
    ];

    public function mount($company)
    {
        $this->company = $company;

        $this->refreshFinancialCost();
        $this->refreshCommissionOnPurchase();
        $this->refreshRedevance();
        $this->refreshAccountingFinancialTechnicalAssistanceCosts();
        $this->refreshDonationGrantContribution();
        $this->refreshAdvertisingGift();
        $this->refreshExcessRent();
    }

    public function render()
    {
        return view('livewire.other-reintegration.create-other-reintegration');
    }

    public function update()
    {
        $this->state = 'create';
    }

    public function save()
    {
        $data = [
            'expense_not_related' => $this->expense_not_related,
            'unjustfified_expense' => $this->unjustfified_expense,
            'remuneration_not_subject_withholding_tax' => $this->remuneration_not_subject_withholding_tax,
            'financial_cost' => $this->financial_cost,
            'commission_on_purchase' => $this->commission_on_purchase,
            'commission_insurance_broker' => $this->commission_insurance_broker,
            'redevance' => $this->redevance,
            'accountind_financial_technical_assistance_costs' => $this->accountind_financial_technical_assistance_costs,
            'interest_paid' => $this->interest_paid,
            'donation_grant_contribution' => $this->donation_grant_contribution,
            'advertising_gift' => $this->advertising_gift,
            'sumptuary_expenses' => $this->sumptuary_expenses,
            'occult_remuneration' => $this->occult_remuneration,
            'motor_vehicle_tax' => $this->motor_vehicle_tax,
            'income_tax' => $this->income_tax,
            'fines_penalities' => $this->fines_penalities,
            'past_assets' => $this->past_assets,
            'other_non_deductible_expense' => $this->other_non_deductible_expense,
            'variation_conversation_gap' => $this->variation_conversation_gap,
            'excess_rent' => $this->excess_rent,
            'other_non_deductible_expenses' => $this->other_non_deductible_expenses,
        ];

        OtherReintegration::create([
            'expense_not_related' => $this->expense_not_related,
            'unjustfified_expense' => $this->unjustfified_expense,
            'remuneration_not_subject_withholding_tax' => $this->remuneration_not_subject_withholding_tax,
            'financial_cost' => $this->financial_cost,
            'commission_on_purchase' => $this->commission_on_purchase,
            'commission_insurance_broker' => $this->commission_insurance_broker,
            'redevance' => $this->redevance,
            'accountind_financial_technical_assistance_costs' => $this->accountind_financial_technical_assistance_costs,
            'interest_paid' => $this->interest_paid,
            'donation_grant_contribution' => $this->donation_grant_contribution,
            'advertising_gift' => $this->advertising_gift,
            'sumptuary_expenses' => $this->sumptuary_expenses,
            'occult_remuneration' => $this->occult_remuneration,
            'motor_vehicle_tax' => $this->motor_vehicle_tax,
            'income_tax' => $this->income_tax,
            'fines_penalities' => $this->fines_penalities,
            'past_assets' => $this->past_assets,
            'other_non_deductible_expense' => $this->other_non_deductible_expense,
            'variation_conversation_gap' => $this->variation_conversation_gap,
            'excess_rent' => $this->excess_rent,
            'other_non_deductible_expenses' => $this->other_non_deductible_expenses,
            'total_amount' => array_sum($data),
            'company_id' => $this->company->id,
        ]);

        $this->emit('refreshState');
        $this->notification()->success('Succès', 'Opération effectuée avec succès!');
    }

    public function refreshFinancialCost()
    {
        $data = FinancialCost::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->can_edit_financial_cost = ! is_null($data);
        $this->financial_cost = is_null($data) ? 0 : $data->total_amount_reintegrated;
    }

    public function refreshCommissionOnPurchase()
    {
        $data = CommissionOnPurchase::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->can_edit_commission_on_purchase = ! is_null($data);
        $this->commission_on_purchase = is_null($data) ? 0 : $data->renseigned_commission;
    }

    public function refreshRedevance()
    {
        $data = Redevance::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->can_edit_redevance = ! is_null($data);
        $this->redevance = is_null($data) ? 0 : $data->amount_reintegrated;
    }

    public function refreshAccountingFinancialTechnicalAssistanceCosts()
    {
        $data = AssistanceCost::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->can_edit_accounting_financial_technical_assistance_costs = ! is_null($data);
        $this->accountind_financial_technical_assistance_costs = is_null($data) ? 0 : $data->reintegrate_amount;
    }

    public function refreshDonationGrantContribution()
    {
        $data = DonationGrantContribution::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->can_edit_donation_grant_contribution = ! is_null($data);
        $this->donation_grant_contribution = is_null($data) ? 0 : $data->surplus_state;
    }

    public function refreshAdvertisingGift()
    {
        $data = AdvertisingGift::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->can_edit_advertising_gift = ! is_null($data);
        $this->advertising_gift = is_null($data) ? 0 : $data->surplus_reintegrated;
    }

    public function refreshExcessRent()
    {
        $data = ExcessRent::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        $this->can_edit_excess_rent = ! is_null($data);
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
