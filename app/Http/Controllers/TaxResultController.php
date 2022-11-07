<?php

namespace App\Http\Controllers;

use App\Fiscality\Companies\Company;
use Illuminate\Http\Request;

class TaxResultController extends Controller
{
    //

    public function index($id) {
        $company=Company::find($id);
        return view('admin.tax-result.index',[
            'company'=>$company
        ]);
    }

}
