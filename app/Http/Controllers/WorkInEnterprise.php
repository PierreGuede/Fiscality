<?php

namespace App\Http\Controllers;

use App\Fiscality\Companies\Company;
use Illuminate\Http\Request;

class WorkInEnterprise extends Controller
{
    public function index(Company $company)
    {
        return view('admin.adminWork.typeName', compact('company'));
    }

    public function actions(Company $company)
    {
        return view('admin.adminWork.choseAction', compact('company'));
    }

    /**
     * @param $id
     * @return  \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function accountResult(Company $company)
    {
        return view('admin.adminWork.accountResult', compact('company'));
    }

    public function impotcalcul(Company $company)
    {
        return view('admin.adminWork.impotcalcul', compact('company'));
    }

    public function access(Request $request, $id)
    {
        $company = Company::find($id);
        if ($request['name'] == $company->name) {
            return redirect()->route('work.actions', $id);
        } else {
            return redirect()->route('dashboard');
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

    public function show(Company $company)
    {
        return view('admin.adminWork.workInEnterprise', compact('company'));
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
