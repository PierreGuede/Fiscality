<?php

namespace App\Http\Controllers;

use App\Fiscality\Companies\Company;

class PersonnelExpenseController extends Controller
{
    public function index(Company $company)
    {
        return view('admin.adminWork.accuredCharge');
    }
}
