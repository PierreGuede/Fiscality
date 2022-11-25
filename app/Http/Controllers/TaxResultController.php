<?php

namespace App\Http\Controllers;

use App\Fiscality\Companies\Company;

class TaxResultController extends Controller
{
    //

    public function index(Company $company)
    {
        return view('admin.tax-result.index', compact('company'));
    }

    public function showAccountResult(Company $company)
    {
        return view('admin.tax-result.account-result.index', compact('company'));
    }

    public function showDeduction(Company $company)
    {
        return view('admin.tax-result.deduction.index', compact('company'));
    }
    public function totalTaxableIncomeBeforeHeadOfficeExpenses(Company $company)
    {
        return view('admin.tax-result.total-tax-result',compact('company'));
    }
}
