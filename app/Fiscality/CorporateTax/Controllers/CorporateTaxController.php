<?php

namespace App\Fiscality\CorporateTax\Controllers;

use App\Fiscality\Companies\Company;
use App\Http\Controllers\Controller;

class CorporateTaxController extends Controller
{
    public function index(Company $company)
    {
        return view('admin.corporate-tax.index', compact('company'));
    }
}
