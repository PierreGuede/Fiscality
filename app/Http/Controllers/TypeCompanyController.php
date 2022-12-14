<?php

namespace App\Http\Controllers;

use App\Fiscality\TypeCompanies\Requests\CreateTypeCompanyRequest;
use App\Fiscality\TypeCompanies\Requests\UpdateTypeCompanyRequest;
use App\Fiscality\TypeCompanies\TypeCompany;
use App\Fiscality\TypeImpots\TypeImpot;
use Illuminate\Support\Str;

class TypeCompanyController extends Controller
{
    public function index()
    {
        $type = TypeCompany::all();
        $impot = TypeImpot::all();

        return view('admin.typesCompanies.index', ['type' => $type, 'impot' => $impot]);
    }

    public function create()
    {
        $impot = TypeImpot::all();

        return view('admin.typesCompanies.create', ['impot' => $impot]);
    }

    public function store(CreateTypeCompanyRequest $request)
    {
        $standarcode = Str::slug($request['name'], '_');
        $type = TypeCompany::create([
            'name' => $request['name'],
            'code' => $standarcode,
        ]);
        $type->impot()->sync($request['impot_id']);

        return redirect()->route('type.index');
    }

    public function edit(TypeCompany $id)
    {
        $impot = TypeImpot::all();

        return view('admin.typesCompanies.update', ['type' => $id, 'impot' => $impot]);
    }

    public function update(UpdateTypeCompanyRequest $request, $id)
    {
        $type = TypeCompany::find($id);
        $type->update($request->validated());

        return redirect()->route('type.index');
    }

    public function destroy($id)
    {
        $type = TypeCompany::find($id);
        $type->delete();

        return redirect()->route('type.index');
    }
}
