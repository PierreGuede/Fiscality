<?php

namespace App\Http\Controllers;

use App\Fiscality\TaxCenters\Requests\CreateTaxCenterRequest;
use App\Fiscality\TaxCenters\TaxCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TaxCenterController extends Controller
{
    public function index()
    {
        $taxCenter = TaxCenter::all();

        return view('admin.taxCenters.index', ['taxCenter' => $taxCenter]);
    }

    public function create()
    {
        return view('admin.taxCenters.create');
    }

    public function store(CreateTaxCenterRequest $request)
    {
        $standarcode = Str::slug($request['name'], '_');
        $taxCenter = TaxCenter::create([
            'name' => $request['name'],
            'address' => $request['address'],
            'code' => $standarcode,
        ]);

        return redirect()->route('taxCenter.index');
    }

    public function edit(TaxCenter $id)
    {
        return view('admin.taxCenters.update', ['taxCenter' => $id]);
    }

    public function update(Request $request, $id)
    {
        $taxCenter = TaxCenter::find($id);
        $taxCenter->update(['name' => $request['name'], 'address' => $request['address']]);

        return redirect()->route('taxCenter.index');
    }

    public function destroy($id)
    {
        $taxCenter = TaxCenter::find($id);
        dd($taxCenter);
        $taxCenter->delete();

        return redirect()->route('taxCenter.index');
    }
}
