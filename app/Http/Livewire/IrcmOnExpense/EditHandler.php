<?php

namespace App\Http\Livewire\IrcmOnExpense;

use App\Fiscality\AdvertisingGifts\AdvertisingGift;
use App\Fiscality\AssistanceCosts\AssistanceCost;
use App\Fiscality\CommissionOnPurchases\CommissionOnPurchase;
use App\Fiscality\ExcessRents\ExcessRent;
use App\Fiscality\FinancialCosts\FinancialCost;
use App\Fiscality\Redevances\Redevance;
use App\Models\DonationGrantContribution;
use App\Models\IRCMOnExpenseDetail;
use App\Models\OtherReintegration;
use Carbon\Carbon;
use Livewire\Component;

class EditHandler extends Component
{
    public const FIRST_STEP = 'FIRST_STEP';

    public const SECOND_STEP = 'SECOND_STEP';

    public $state = self::FIRST_STEP;

    public string $select_all;

    public ?OtherReintegration $other_reintegration;

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

    public $ircm_on_expense_detail;

    public $data;

    public $listeners = ['refresh'];

    public function mount($company)
    {
        $this->company = $company;
        $this->select_all = false;
        $this->initialState();

        $this->refreshFinancialCost();
        $this->refreshCommissionOnPurchase();
        $this->refreshRedevance();
        $this->refreshAccountingFinancialTechnicalAssistanceCosts();
        $this->refreshDonationGrantContribution();
        $this->refreshAdvertisingGift();
        $this->refreshExcessRent();

        $this->other_reintegration = OtherReintegration::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        $this->ircm_on_expense_detail = IRCMOnExpenseDetail::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->get();

        for ($i = 0; $i < count($this->ircm_on_expense_detail); $i++) {
            $this->data[$this->ircm_on_expense_detail[$i]['field']] = 'true';
        }

        $this->fill(
            [
                'expense_not_related' => $this->other_reintegration?->expense_not_related,
                'unjustfified_expense' => $this->other_reintegration?->unjustfified_expense,
                'remuneration_not_subject_withholding_tax' => $this->other_reintegration?->remuneration_not_subject_withholding_tax,
                'financial_cost' => $this->financial_cost,
                'commission_on_purchase' => $this->commission_on_purchase,
                'commission_insurance_broker' => $this->other_reintegration?->commission_insurance_broker,
                'redevance' => $this->redevance,
                'accountind_financial_technical_assistance_costs' => $this->accountind_financial_technical_assistance_costs,
                'interest_paid' => $this->other_reintegration?->interest_paid,
                'donation_grant_contribution' => $this->donation_grant_contribution,
                'advertising_gift' => $this->advertising_gift,
                'sumptuary_expenses' => $this->other_reintegration?->sumptuary_expenses,
                'occult_remuneration' => $this->other_reintegration?->occult_remuneration,
                'motor_vehicle_tax' => $this->other_reintegration?->motor_vehicle_tax,
                'income_tax' => $this->other_reintegration?->income_tax,
                'fines_penalities' => $this->other_reintegration?->fines_penalities,
                'past_assets' => $this->other_reintegration?->past_assets,
                'other_non_deductible_expense' => $this->other_reintegration?->other_non_deductible_expense,
                'variation_conversation_gap' => $this->other_reintegration?->variation_conversation_gap,
                'excess_rent' => $this->excess_rent,
                'other_non_deductible_expenses' => $this->other_reintegration?->other_non_deductible_expenses,
            ]);
    }

    public function render()
    {
        return view('livewire.ircm-on-expense.edit-handler');
    }

    public function updatedSelectAll($value)
    {
//        $this->select_all = !$this->select_all;
        if ($this->select_all == true) {
            $this->selectAllDataState();
        } else {
            $this->initialState();
        }
    }

    public function initialState()
    {
        $this->data = [
            'expense_not_related' => 'true',
            'unjustfified_expense' => '',
            'remuneration_not_subject_withholding_tax' => '',
            'financial_cost' => '',
            'commission_on_purchase' => 'true',
            'commission_insurance_broker' => '',
            'redevance' => 'true',
            'accountind_financial_technical_assistance_costs' => '',
            'interest_paid' => 'true',
            'donation_grant_contribution' => 'true',
            'advertising_gift' => '',
            'sumptuary_expenses' => '',
            'occult_remuneration' => '',
            'motor_vehicle_tax' => '',
            'income_tax' => '',
            'fines_penalities' => '',
            'past_assets' => 'true',
            'other_non_deductible_expense' => 'true',
            'variation_conversation_gap' => 'true',
            'excess_rent' => '',
            'other_non_deductible_expenses' => '',
        ];
    }

    public function selectAllDataState()
    {
        $this->data = [
            'expense_not_related' => 'true',
            'unjustfified_expense' => 'true',
            'remuneration_not_subject_withholding_tax' => 'true',
            'financial_cost' => 'true',
            'commission_on_purchase' => 'true',
            'commission_insurance_broker' => 'true',
            'redevance' => 'true',
            'accountind_financial_technical_assistance_costs' => 'true',
            'interest_paid' => 'true',
            'donation_grant_contribution' => 'true',
            'advertising_gift' => 'true',
            'sumptuary_expenses' => 'true',
            'occult_remuneration' => 'true',
            'motor_vehicle_tax' => 'true',
            'income_tax' => 'true',
            'fines_penalities' => 'true',
            'past_assets' => 'true',
            'other_non_deductible_expense' => 'true',
            'variation_conversation_gap' => 'true',
            'excess_rent' => 'true',
            'other_non_deductible_expenses' => 'true',
        ];
    }

    public function update()
    {
        $this->state = 'create';
    }

    public function nextStep()
    {
        $this->state = self::SECOND_STEP;
    }

    public function prevStep()
    {
        $this->state = self::FIRST_STEP;
    }

    public function save()
    {
        $total = 0;
        $this->other_reintegration = OtherReintegration::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        for ($i = 0; $i < count($this->data); $i++) {
            if ($this->data[array_keys($this->data)[$i]] == 'true') {
                IRCMOnExpenseDetail::updateOrCreate([
                    'field' => array_keys($this->data)[$i],
                ], [
                    'is_selected' => true,
                    'amount' => (float) $this->other_reintegration[array_keys($this->data)[$i]],
                    'user_id' => auth()->user()->id,
                    'company_id' => $this->company->id,
                ]);
                $total += (float) $this->other_reintegration[array_keys($this->data)[$i]];
            }
        }
        $element_to_remove = [];
        for ($i = 0; $i < count($this->ircm_on_expense_detail); $i++) {
            if ($this->data[$this->ircm_on_expense_detail[$i]['field']] == '') {
                $element_to_remove[$i] = $this->ircm_on_expense_detail[$i]->id;
            }
        }

        if (count($element_to_remove) > 0) {
            IRCMOnExpenseDetail::destroy($element_to_remove);
        }

        notify()->success('Enregistrer avec succès');

        $this->state = 'READ';
        $this->emit('refresh');
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
