<?php

namespace App\Http\Controllers;

use App\Fiscality\Companies\Company;
use App\Fiscality\DetailTypes\DetailType;
use Illuminate\Http\Request;

class CompanySettingController extends Controller
{
    public function index(Request $request, Company $company)
    {
        return view('auth.company-setting.index', compact('company'));
    }

//    Imposisition
    public function taxation(Request $request, Company $company)
    {
        $detail = DetailType::whereId(1)->with('base')->get();
        return view('auth.company-setting.taxation', compact('company'));
    }
}
