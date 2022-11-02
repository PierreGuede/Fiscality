<?php

namespace App\Http\Controllers;

use App\Fiscality\Domains\Domain;
use App\Fiscality\PrincipalActivities\PrincipalActivity;
use Illuminate\Http\Request;

class PrincipalActivityController extends Controller
{
    public function index()
    {
        $typeAct = PrincipalActivity::all();
        $domain = Domain::all();

        return view('admin.principalActivity.index', ['typeAct' => $typeAct, 'domain' => $domain]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:type_impots'],
        ]);
        $typeAct = PrincipalActivity::create([
            'name' => $request['name'],
            'domain_id' => $request['domain_id'],
        ]);

        return redirect()->route('typeAct.index');
    }

    public function edit(PrincipalActivity $id)
    {
        return view('admin.principalActivity.update', ['typeAct' => $id]);
    }

    public function update(Request $request, $id)
    {
        $typeAct = PrincipalActivity::find($id);
        $typeAct->update(['name' => $request['name']]);

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
