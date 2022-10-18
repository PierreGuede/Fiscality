<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Fiscality\Domains\Domain;

class DomainController extends Controller
{
    public function index()
    {
        $domain=Domain::all();
        return view('admin.domains.index',['domain'=>$domain]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255','unique:type_impots'],
        ]);
        $standarcode=Str::slug($request['name'],'_');
        $domain=Domain::create([
            'name'=>$request['name'],
            'code'=>$standarcode,
        ]);
        return redirect()->route('domain.index');
    }


    public function edit(Domain $id)
    {
        return view('admin.domains.update',['domain'=>$id]);
    }

    public function update(Request $request,$id)
    {
        $domain=Domain::find($id);
        $domain->update(['name'=>$request['name'],]);
        return redirect()->route('domain.index');
    }
    public function destroy($id)
    {
        $domain = Domain::find($id);
        dd($domain);
        $domain->delete();
        return redirect()->route('domain.index');
    }
}
