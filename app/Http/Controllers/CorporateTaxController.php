<?php

namespace App\Http\Controllers;

use App\Fiscality\Companies\Company;

class CorporateTaxController extends Controller
{
    public function index(Company $company)
    {
        return view('admin.corporate-tax.index', compact('company'));
    }
}
