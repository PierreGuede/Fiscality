<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxResultController extends Controller
{
    //

    public function index() {
        return view('admin.tax-result.index');
    }

}
