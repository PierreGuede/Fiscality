<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Fiscality\IncomeExpenses\IncomeExpense;

class IncomeExpenseController extends Controller
{
    public function index()
    {
        $productCountable=IncomeExpense::all();
        return view('admin.accounting-products.index',['productCountable'=>$productCountable]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'account' => ['required', 'string', 'max:255','unique:income_expenses'],
            'name' => ['required', 'string', 'max:255','unique:income_expenses'],
        ]);
        $standarcode=Str::slug($request['name'],'_');
        $productCountable=IncomeExpense::create([
            'account'=>$request['account'],
            'name'=>$request['name'],
            'type'=>$request['type'],
        ]);
        return redirect()->route('accounting-product.index');
    }


    public function edit(IncomeExpense $id)
    {
        return view('admin.accounting-products.update',['productCountable'=>$id]);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'account' => ['sometimes','required', 'string', 'max:255', Rule::unique('income_expenses')->ignore($id)],
        ]);

        $productCountable=IncomeExpense::find($id);
        $productCountable->update(['account'=>$request['account'],
        'name'=>$request['name'],
        'type'=>$request['type'],]);
        return redirect()->route('accounting-product.index');
    }
    public function destroy($id)
    {
        $productCountable = IncomeExpense::find($id);
        $productCountable->delete();
        return redirect()->route('accounting-product.index');
    }
}
