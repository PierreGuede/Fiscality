<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fiscality\Companies\Company;

class WorkInEnterprise extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Company $id)
    {
       return view('admin.adminWork.workInEnterprise',[
        'company'=>$id
       ]);
    }


    public function edit(Company $company)
    {

    }


    public function update(Request $request, Company $company)
    {
        //
    }


    public function destroy(Company $company)
    {
        //
    }
}
