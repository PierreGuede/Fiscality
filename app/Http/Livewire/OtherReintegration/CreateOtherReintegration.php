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

class CreateOtherReintegration extends Component
{
    public $company;

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
            'company_id' => $this->company->id,
        ];

        dd($data);

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
            'company_id' => $this->company->id,
        ]);
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
