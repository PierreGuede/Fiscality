<?php

namespace App\Http\Controllers;

use App\Fiscality\Companies\Company;

class HeadOfficeCostController extends Controller
{
    public function index(Company $company)
    {
        return view('admin.head-office-costs.index', compact('company'));
    }


}
