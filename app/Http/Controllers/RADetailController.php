<?php

namespace App\Http\Controllers;

use App\Fiscality\RADetails\RADetail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RADetailController extends Controller
{
    public function index()
    {
        $raDetail = RADetail::all();

        return view('admin.RADetail.index', ['raDetail' => $raDetail]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:type_impots'],
        ]);
        $standarcode = Str::slug($request['name'], '_');
        $raDetail = RADetail::create([
            'account' => $request['account'],
            'name' => $request['name'],
            'amount' => $request['amount'],
            'type' => $request['type'],
            'accounting_result_id' => $request['accounting_result_id'],
            'company_id' => $request['company_id'],
            'code' => $request['code'],
        ]);

        return redirect()->route('RADetail.index');
    }

    public function edit(RADetail $id)
    {
        return view('admin.RADetail.update', ['raDetail' => $id]);
    }

    public function update(Request $request, $id)
    {
        $raDetail = RADetail::find($id);
        $raDetail->update(['account' => $request['account'],
            'name' => $request['name'],
            'amount' => $request['amount'],
            'type' => $request['type'],
            'accounting_result_id' => $request['accounting_result_id'],
            'company_id' => $request['company_id'],
            'code' => $request['code'], ]);

        return redirect()->route('RADetail.index');
    }

    public function destroy($id)
    {
        $raDetail = RADetail::find($id);
        dd($raDetail);
        $raDetail->delete();

        return redirect()->route('RADetail.index');
    }
}
