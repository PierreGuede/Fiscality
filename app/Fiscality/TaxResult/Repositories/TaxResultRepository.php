<?php

namespace App\Fiscality\TaxResult\Repositories;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\AdvertisingGifts\AdvertisingGift;
use App\Fiscality\AssistanceCosts\AssistanceCost;
use App\Fiscality\CommissionOnPurchases\CommissionOnPurchase;
use App\Fiscality\Companies\Company;
use App\Fiscality\Depreciations\Depreciation;
use App\Fiscality\ExcessRents\ExcessRent;
use App\Fiscality\Excesss\Excess;
use App\Fiscality\FinancialCosts\FinancialCost;
use App\Fiscality\Redevances\Redevance;
use App\Fiscality\TaxResult\Repositories\Interfaces\TaxResultRepositoryInterface;
use App\Fiscality\Vehicles\Vehicle;
use App\Models\AccuredChargeCompany;
use App\Models\Deduction;
use App\Models\DonationGrantContribution;
use App\Models\HeadOfficeCost;
use App\Models\OtherReintegration;
use Carbon\Carbon;

class TaxResultRepository implements TaxResultRepositoryInterface
{
    public Company $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function getData()
    {
        $account_result = AccountingResult::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        $vehicle = Vehicle::where('company_id', $this->company->id)->sum('deductible_amortization');
        $deductible_amortization = Excess::where('company_id', $this->company->id)->sum('deductible_amortization');
        $dotation = Depreciation::where('company_id', $this->company->id)->sum('dotation');

        $amortization = array_sum([$vehicle, $deductible_amortization, $dotation]);

        $accured_charge = AccuredChargeCompany::where('company_id', $this->company->id)->sum('amount');

        $deduction = Deduction::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        $other_reintegration = OtherReintegration::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $other_reintegration_data = [
            'expense_not_related' => $other_reintegration?->expense_not_related,
            'unjustfified_expense' => $other_reintegration?->unjustfified_expense,
            'remuneration_not_subject_withholding_tax' => $other_reintegration?->remuneration_not_subject_withholding_tax,
            'commission_insurance_broker' => $other_reintegration?->commission_insurance_broker,
            'sumptuary_expenses' => $other_reintegration?->sumptuary_expenses,
            'occult_remuneration' => $other_reintegration?->occult_remuneration,
            'motor_vehicle_tax' => $other_reintegration?->motor_vehicle_tax,
            'income_tax' => $other_reintegration?->income_tax,
            'fines_penalities' => $other_reintegration?->fines_penalities,
            'past_assets' => $other_reintegration?->past_assets,
            'other_non_deductible_expense' => $other_reintegration?->other_non_deductible_expense,
            'variation_conversation_gap' => $other_reintegration?->variation_conversation_gap,
            'other_non_deductible_expenses' => $other_reintegration?->other_non_deductible_expenses,
        ];

        $data = [
            'account_result' => $account_result?->ar_value,
            'amortization' => $amortization,
            'accured_charge' => $accured_charge,
            'financial_cost' => $this->getFinancialCost(),
            'commission_on_purchase' => $this->getCommissionOnPurchase(),
            'redevance' => $this->getRedevance(),
            'accounting_financial_technical_assistance_cost' => $this->getAccountingFinancialTechnicalAssistanceCosts(),
            'donation_grant_contribution' => $this->getDonationGrantContribution(),
            'advertising_gift' => $this->getAdvertisingGift(),
            'excess_rent' => $this->getExcessRent(),
            'deduction' => $deduction?->total_deduction,
            'other_reintegration' => array_sum($other_reintegration_data),
        ];

        return  $data;
    }

    public function getTotalTaxResultBeforeHeadOfficeCost()
    {
        return array_sum($this->getData());
    }

    public function getTotalTaxResultBeforeDeficitReport()
    {
        $total_tax_result_before_head_office_cost = $this->getTotalTaxResultBeforeHeadOfficeCost();
        $head_office_cost = HeadOfficeCost::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        return $head_office_cost?->non_deductible_head_office_costs + $total_tax_result_before_head_office_cost;
    }

    public function getFinancialCost()
    {
        $data = FinancialCost::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        return is_null($data) ? 0 : $data->total_amount_reintegrated;
    }

    public function getCommissionOnPurchase()
    {
        $data = CommissionOnPurchase::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        return is_null($data) ? 0 : $data->renseigned_commission;
    }

    public function getRedevance()
    {
        $data = Redevance::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        return is_null($data) ? 0 : $data->amount_reintegrated;
    }

    public function getAccountingFinancialTechnicalAssistanceCosts()
    {
        $data = AssistanceCost::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        return is_null($data) ? 0 : $data->reintegrate_amount;
    }

    public function getDonationGrantContribution()
    {
        $data = DonationGrantContribution::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        return is_null($data) ? 0 : $data->surplus_state;
    }

    public function getAdvertisingGift()
    {
        $data = AdvertisingGift::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        return is_null($data) ? 0 : $data->surplus_reintegrated;
    }

    public function getExcessRent()
    {
        $data = ExcessRent::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        return is_null($data) ? 0 : $data->amount_rent_reintegrated;
    }
}
