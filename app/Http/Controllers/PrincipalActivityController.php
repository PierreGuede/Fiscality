<?php

namespace App\Http\Controllers;

use App\Fiscality\Domains\Domain;
use App\Fiscality\PrincipalActivities\PrincipalActivity;
use App\Fiscality\PrincipalActivities\Requests\CreatePrincipalActivityRequest;
use App\Fiscality\PrincipalActivities\Requests\UpdatePrincipalActivityRequest;

class PrincipalActivityController extends Controller
{
    public function index()
    {
        $typeAct = PrincipalActivity::all();
        $domain = Domain::all();

        return view('admin.principalActivity.index', ['typeAct' => $typeAct, 'domain' => $domain]);
    }

    public function create()
    {
        $domain = Domain::all();

        return view('admin.principalActivity.create', ['domain' => $domain]);
    }

    public function store(CreatePrincipalActivityRequest $request)
    {
        $typeAct = PrincipalActivity::create([
            'name' => $request['name'],
            'domain_id' => $request['domain_id'],
        ]);

        return redirect()->route('typeAct.index');
    }

    public function edit(PrincipalActivity $id)
    {
        $domain = Domain::all();

        return view('admin.principalActivity.update', ['typeAct' => $id, 'domain' => $domain]);
    }

    public function update(UpdatePrincipalActivityRequest $request, $id)
    {
        $typeAct = PrincipalActivity::find($id);
        $typeAct->update($request->validated());

        return redirect()->route('typeAct.index');
    }

    public function destroy($id)
    {
        $typeAct = PrincipalActivity::find($id);
        dd($typeAct);
        $typeAct->delete();

        return redirect()->route('typeAct.index');
    }
}
