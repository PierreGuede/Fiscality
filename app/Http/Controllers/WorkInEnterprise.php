<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fiscality\Companies\Company;

class WorkInEnterprise extends Controller
{

    public function index($id)
    {
        $company=Company::find($id);
        return view('admin.adminWork.typeName',compact('company'));
    }

    public function actions($id)
    {
        $company=Company::find($id);
        return view('admin.adminWork.choseAction',compact('company'));
    }
    public function accountResult($id){
        $company=Company::find($id);
        return view('admin.adminWork.accountResult',compact('company'));
    }
    public function impotcalcul($id){
        $company=Company::find($id);
        return view('admin.adminWork.impotcalcul',compact('company'));
    }
    public function access(Request $request,$id)
    {
        $company=Company::find($id);
        if ($request['name'] == $company->name ) {
            return redirect()->route('work.actions',$id);
        }
        else{

        }

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
