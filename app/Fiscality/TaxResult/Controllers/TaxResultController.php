<?php

namespace App\Fiscality\TaxResult\Controllers;

use App\Fiscality\Companies\Company;
use App\Fiscality\TaxResult\Repositories\TaxResultRepository;
use App\Http\Controllers\Controller;

class TaxResultController extends Controller
{
    //

    public function index(Company $company)
    {
        $taxResultRepository = new TaxResultRepository($company);

        $data = $taxResultRepository->getData();

        $total_tax_result_before_head_office_cost = $taxResultRepository->getTotalTaxResultBeforeHeadOfficeCost();
        $total_tax_result_before_deficit_report = $taxResultRepository->getTotalTaxResultBeforeDeficitReport();

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
}
