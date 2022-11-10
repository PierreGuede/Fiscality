<?php

namespace App\Http\Controllers;

use App\Fiscality\Companies\Company;

class NonDeductibleChargeController extends Controller
{
    public function index(Company $company)
    {
        return view('admin.tax-result.non-deductible-charge.index', compact('company'));
    }
}
