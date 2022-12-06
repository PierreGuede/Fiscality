<?php

namespace App\Http\Controllers;

use App\Fiscality\Companies\Company;
use Illuminate\Http\Request;

class DeficitController extends Controller
{
    public function index(Company $company)
    {
        return view('admin.deficit.index', compact('company'));
    }
}
