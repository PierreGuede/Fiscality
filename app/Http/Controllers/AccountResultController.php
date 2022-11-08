<?php

namespace App\Http\Controllers;

use App\Fiscality\Companies\Company;
use Illuminate\Http\Request;

class AccountResultController extends Controller
{
    public function index(Company $company) {
        return view('admin.tax-result.account-result.index', compact('company'));
    }
}
