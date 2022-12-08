<?php

namespace App\Http\Controllers;

use App\Fiscality\Companies\Company;

class BusinessProfitTaxController extends Controller
{
    public function index(Company $company)
    {
        $total = 0;
        return view('admin.business-profit-tax.index', compact('company'));
    }
}
