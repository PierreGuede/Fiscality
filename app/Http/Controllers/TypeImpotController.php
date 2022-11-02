<?php

namespace App\Http\Controllers;

use App\Fiscality\TypeImpots\TypeImpot;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TypeImpotController extends Controller
{
    public function index()
    {
        $typeImpot = TypeImpot::all();

        return view('admin.typeImpots.index', ['typeImpot' => $typeImpot]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:type_impots'],
        ]);
        $standarcode = Str::slug($request['name'], '_');
        $typeImpot = TypeImpot::create([
            'name' => $request['name'],
            'code' => $standarcode,
        ]);

        return redirect()->route('typeImpot.index');
    }

    public function edit(TypeImpot $id)
    {
        return view('admin.typeImpots.update', ['typeImpot' => $id]);
    }

    public function update(Request $request, $id)
    {
        $typeImpot = TypeImpot::find($id);
        $typeImpot->update(['name' => $request['name']]);

        return redirect()->route('typeImpot.index');
    }

    public function destroy($id)
    {
        $typeImpot = TypeImpot::find($id);
        $typeImpot->delete();

        return redirect()->route('typeImpot.index');
    }
}
