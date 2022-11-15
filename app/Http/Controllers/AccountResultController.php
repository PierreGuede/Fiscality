<?php

namespace App\Http\Controllers;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\Companies\Company;

class AccountResultController extends Controller
{
    public function index(Company $company)
    {
        $accountingresult=AccountingResult::where('company_id',$company->id)->where('date',date('Y'))->first();

        return view('admin.tax-result.account-result.index', compact('company','accountingresult'));
    }
}
