<?php
namespace App\Fiscality\IncomeExpenses\Repositories;

use Illuminate\Support\Str;
use App\Fiscality\IncomeExpenses\IncomeExpense;
use App\Fiscality\IncomeExpenses\Repositories\Interfaces\IncomeExpenseRepositoryInterface;

class IncomeExpenseRepository implements IncomeExpenseRepositoryInterface
{
    public $model,$str;
    public function __construct(IncomeExpense $model, Str $str)
    {
        $this->model=$model;
        $this->str=$str;
    }
    public function index()
    {
        $productCountable=$this->model->all();
        return view('admin.accounting-products.index',['productCountable'=>$productCountable]);
    }

    public function store(array $data):IncomeExpense
    {
        $data->validate([
        ]);
        $standarcode=$this->str->slug($data['name'],'_');
        $productCountable=$this->model->create([
            'account'=>$data['account'],
            'name'=>$data['name'],
            'type'=>$data['type'],
        ]);
        // return redirect()->route('accounting-product.index');
        return $productCountable;
    }


    public function edit(IncomeExpense $id)
    {
        return view('admin.accounting-products.update',['productCountable'=>$id]);
    }

    public function update(array $data,$id):IncomeExpense
    {
        $data->validate([
        ]);

        $productCountable=$this->model->find($id);
        $productCountable->update(['account'=>$data['account'],
        'name'=>$data['name'],
        'type'=>$data['type'],]);
        return $productCountable;
        // return redirect()->route('accounting-product.index');
    }
    public function destroy($id)
    {
        $productCountable = $this->model->find($id);
        $productCountable->delete();
        return redirect()->route('accounting-product.index');
    }
}
