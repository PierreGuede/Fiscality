<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Fiscality\TypeImpots\TypeImpot;
use App\Fiscality\TypeCompanies\TypeCompany;

class TypeCompanyController extends Controller
{
    public function index()
    {
        $type=TypeCompany::all();
        $impot=TypeImpot::all();
        return view('admin.typesCompanies.index',['type'=>$type,'impot'=>$impot]);
    }

    public function store(Request $request)
    {
        $request->validate([
        'name' => ['required', 'string', 'max:255','unique:type_impots'],
    ]);
    $standarcode=Str::slug($request['name'],'_');
    $type=TypeCompany::create([
            'name'=>$request['name'],
            'code'=>$standarcode,
        ]);
        $type->impot()->sync($request['impot_id']);
        return redirect()->route('type.index');
    }


    public function edit(TypeCompany $id)
    {
        return view('admin.typesCompanies.update',['type'=>$id]);
    }

    public function update(Request $request,$id)
    {
        $type=TypeCompany::find($id);
        $type->update(['name'=>$request['name'],]);
        return redirect()->route('type.index');
    }
    public function destroy($id)
    {
        $type = TypeCompany::find($id);
        $type->delete();
        return redirect()->route('type.index');
    }
}
