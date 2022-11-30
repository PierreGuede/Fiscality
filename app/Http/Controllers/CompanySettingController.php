<?php

namespace App\Http\Controllers;

use App\Fiscality\Companies\Company;
use Illuminate\Http\Request;

class CompanySettingController extends Controller
{
    public function index(Request $request, Company $company)
    {

        dd($company);
        return view('auth.company-setting.index');
    }
}
