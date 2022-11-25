<?php

namespace App\Http\Controllers;

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
use App\Fiscality\Vehicles\Vehicle;
use App\Models\AccuredChargeCompany;
use App\Models\Deduction;
use App\Models\DonationGrantContribution;
use App\Models\HeadOfficeCost;
use App\Models\OtherReintegration;
use Carbon\Carbon;

class TaxResultController extends Controller
{
    //

    public function index(Company $company)
    {
        $account_result = AccountingResult::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();


        $vehicle = Vehicle::where('company_id', $company->id)->sum('deductible_amortization');
        $deductible_amortization = Excess::where('company_id', $company->id)->sum('deductible_amortization');
        $dotation = Depreciation::where('company_id', $company->id)->sum('dotation');

        $amortization = array_sum([$vehicle, $deductible_amortization, $dotation]);

        $accured_charge = AccuredChargeCompany::where('company_id', $company->id)->sum('amount');

        $deduction = Deduction::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();

        $other_reintegration = OtherReintegration::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $other_reintegration_data = [
            'expense_not_related' =>  $other_reintegration?->expense_not_related,
            'unjustfified_expense' =>  $other_reintegration?->unjustfified_expense,
            'remuneration_not_subject_withholding_tax' =>  $other_reintegration?->remuneration_not_subject_withholding_tax,
            'commission_insurance_broker' =>  $other_reintegration?->commission_insurance_broker,
            'sumptuary_expenses' =>  $other_reintegration?->sumptuary_expenses,
            'occult_remuneration' =>  $other_reintegration?->occult_remuneration,
            'motor_vehicle_tax' =>  $other_reintegration?->motor_vehicle_tax,
            'income_tax' =>  $other_reintegration?->income_tax,
            'fines_penalities' =>  $other_reintegration?->fines_penalities,
            'past_assets' =>  $other_reintegration?->past_assets,
            'other_non_deductible_expense' =>  $other_reintegration?->other_non_deductible_expense,
            'variation_conversation_gap' =>  $other_reintegration?->variation_conversation_gap,
            'other_non_deductible_expenses' =>  $other_reintegration?->other_non_deductible_expenses,
        ];

        $data  = [
            'account_result' => $account_result?->ar_value,
            'amortization' => $amortization,
            'accured_charge' => $accured_charge,
            'financial_cost' => $this->getFinancialCost($company),
            'commission_on_purchase' => $this->getCommissionOnPurchase($company),
            'redevance' => $this->getRedevance($company),
            'accounting_financial_technical_assistance_cost' => $this->getAccountingFinancialTechnicalAssistanceCosts($company),
            'donation_grant_contribution' => $this->getDonationGrantContribution($company),
            'advertising_gift' => $this->getAdvertisingGift($company),
            'excess_rent' => $this->getExcessRent($company),
            'deduction' => $deduction?->total_deduction,
            'other_reintegration' => array_sum($other_reintegration_data),
        ] ;

        $total_tax_result_before_head_office_cost = array_sum($data);
        $head_office_cost = HeadOfficeCost::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $total_tax_result_before_deficit_report = $head_office_cost?->non_deductible_head_office_costs + $total_tax_result_before_head_office_cost ;


        return view('admin.tax-result.index', compact('company', 'data', 'total_tax_result_before_head_office_cost', 'total_tax_result_before_deficit_report'));
    }

    public function showAccountResult(Company $company)
    {
        return view('admin.tax-result.account-result.index', compact('company'));
    }

    public function showDeduction(Company $company)
    {
        return view('admin.tax-result.deduction.index', compact('company'));
    }


    public function getFinancialCost(Company $company)
    {
        $data = FinancialCost::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();
        return is_null($data) ? 0 : $data->total_amount_reintegrated;
    }

    public function getCommissionOnPurchase(Company $company)
    {
        $data = CommissionOnPurchase::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();
        return is_null($data) ? 0 : $data->renseigned_commission;
    }

    public function getRedevance(Company $company)
    {
        $data = Redevance::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();
        return is_null($data) ? 0 : $data->amount_reintegrated;
    }

    public function getAccountingFinancialTechnicalAssistanceCosts(Company $company)
    {
        $data = AssistanceCost::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();
        return is_null($data) ? 0 : $data->reintegrate_amount;
    }

    public function getDonationGrantContribution(Company $company)
    {
        $data = DonationGrantContribution::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();
        return is_null($data) ? 0 : $data->surplus_state;
    }

    public function getAdvertisingGift(Company $company)
    {
        $data = AdvertisingGift::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();
        return is_null($data) ? 0 : $data->surplus_reintegrated;
    }

    public function getExcessRent(Company $company)
    {
        $data = ExcessRent::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();
        return is_null($data) ? 0 : $data->amount_rent_reintegrated;
    }
}
