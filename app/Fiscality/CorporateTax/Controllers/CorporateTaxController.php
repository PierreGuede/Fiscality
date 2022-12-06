<?php

namespace App\Fiscality\CorporateTax\Controllers;

use App\Fiscality\Companies\Company;
use App\Fiscality\CorporateTax\Repositories\CorporateTaxRepository;
use App\Http\Controllers\Controller;

class CorporateTaxController extends Controller
{
    public function index(Company $company)
    {
        return view('admin.corporate-tax.index', compact('company'));
    }
}
