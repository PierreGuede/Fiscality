<?php

namespace App\Http\Controllers;

use App\Fiscality\Companies\Company;
use Illuminate\Http\Request;

class DeductionController extends Controller
{
    public function index(Company $company) {
        return view('admin.tax-result.deduction.index', compact('company'));
    }
}
