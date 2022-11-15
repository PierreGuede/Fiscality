<?php

namespace App\Http\Controllers;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\Companies\Company;
use App\Fiscality\RADetails\RADetail;
use Carbon\Carbon;

class AccountResultController extends Controller
{
    public function index(Company $company)
    {
        $accountingresult=AccountingResult::where('company_id',$company->id)->where('date',date('Y'))->first();

        return view('admin.tax-result.account-result.index', compact('company','accountingresult'));
    }

    public function expense(Company $company)
    {
        $expense = RADetail::whereType(RADetail::EXPENSE)->whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->get();

        return view('admin.tax-result.account-result.expense.index', compact('expense', 'company'));
    }

    public function income(Company $company)
    {
        $income = RADetail::whereType(RADetail::INCOME)->whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->get();

        return view('admin.tax-result.account-result.income.index', compact('income', 'company'));
    }
}
