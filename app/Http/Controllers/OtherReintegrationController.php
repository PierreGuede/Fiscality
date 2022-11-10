<?php

namespace App\Http\Controllers;

use App\Fiscality\Companies\Company;

class OtherReintegrationController extends Controller
{
    public function index(Company $company)
    {
        return view('admin.other-reintegration.index', compact('company'));
    }
}
