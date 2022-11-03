<?php

namespace App\Fiscality\AmortizationDetails\Controllers;

use App\Fiscality\Companies\Company;
use App\Http\Controllers\Controller;

class AmortizationDetailsController extends Controller
{
    public function index(Company $company)
    {
        return view('admin.amortization.index', compact('company'));
    }
}
