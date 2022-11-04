<?php

namespace App\Http\Controllers;

use App\Fiscality\Companies\Company;
use Illuminate\Http\Request;

class OtherReinstatementController extends Controller
{
    public function index ($id){
        $company=Company::find($id);
        return view('admin.adminWork.OtherReinstatement.other-reinstatement',compact('company'));
    }
}
