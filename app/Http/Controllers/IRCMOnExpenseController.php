<?php

namespace App\Http\Controllers;

use App\Fiscality\Companies\Company;

class IRCMOnExpenseController extends Controller
{
    public function index(Company $company)
    {
        return view('admin.ircm-on-expense.index', compact('company'));
    }
}
