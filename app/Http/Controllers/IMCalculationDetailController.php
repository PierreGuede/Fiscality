<?php

namespace App\Http\Controllers;

use App\Fiscality\IMCalculations\IMCalculation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IMCalculationDetailController extends Controller
{
    public function index()
    {
        $imCalculation = IMCalculation::all();

        return view('admin.IMCalculation.index', ['imCalculation' => $imCalculation]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:type_impots'],
        ]);
        $standarcode = Str::slug($request['name'], '_');
        $imCalculation = IMCalculation::create([
            'name' => $request['name'],
        ]);

        return redirect()->route('IMCalculation.index');
    }

    public function edit(IMCalculation $id)
    {
        return view('admin.IMCalculation.update', ['imCalculation' => $id]);
    }

    public function update(Request $request, $id)
    {
        $imCalculation = IMCalculation::find($id);
        $imCalculation->update(['account' => $request['account'],
            'name' => $request['name'],
        ]);

        return redirect()->route('IMCalculation.index');
    }

    public function destroy($id)
    {
        $imCalculation = IMCalculation::find($id);
        dd($imCalculation);
        $imCalculation->delete();

        return redirect()->route('IMCalculation.index');
    }
}
