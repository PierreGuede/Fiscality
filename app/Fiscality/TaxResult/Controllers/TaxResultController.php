<?php

namespace App\Fiscality\TaxResult\Controllers;

use App\Fiscality\Companies\Company;
use App\Fiscality\TaxResult\Repositories\TaxResultRepository;
use App\Http\Controllers\Controller;
use App\Models\Deficit;
use App\Models\HeadOfficeCost;
use Carbon\Carbon;

class TaxResultController extends Controller
{
    //

    public function index(Company $company)
    {
        $taxResultRepository = new TaxResultRepository($company);

        $data = $taxResultRepository->getData();

        $total_tax_result_before_head_office_cost = $taxResultRepository->getTotalTaxResultBeforeHeadOfficeCost();
        $total_tax_result_before_deficit_report = $taxResultRepository->getTotalTaxResultBeforeDeficitReport();
        $deficit = Deficit::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $deficit_total = $deficit?->amount;
        $head_office_cost = HeadOfficeCost::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $head_office_cost_total = $head_office_cost?->non_deductible_head_office_costs;

//      dump($data['other_reintegration']);

        return view('admin.tax-result.index', compact('company', 'data', 'total_tax_result_before_head_office_cost', 'total_tax_result_before_deficit_report', 'deficit_total', 'head_office_cost_total'));
    }

    public function showAccountResult(Company $company)
    {
        return view('admin.tax-result.account-result.index', compact('company'));
    }

    public function showDeduction(Company $company)
    {
        return view('admin.tax-result.deduction.index', compact('company'));
    }
}
