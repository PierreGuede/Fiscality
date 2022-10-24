<?php
namespace App\Fiscality\IncomeExpenses\Repositories;

use Illuminate\Support\Str;
use App\Fiscality\IncomeExpenses\IncomeExpense;
use App\Fiscality\IncomeExpenses\Repositories\Interfaces\IncomeExpenseRepositoryInterface;
use App\Fiscality\IncomeExpenses\Resources\IncomeExpenseResource;

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
        $imCalculationDetail=IncomeExpenseResource::collection($this->model->all());
        return response()->json([
            'imCalculationDetail'=>$imCalculationDetail
        ]);
    }

    public function store(array $data):IncomeExpense
    {
        try {
            $imCalculationDetail=$this->model->create($data);
            return $imCalculationDetail;
           } catch (\Throwable $th) {
            throw $th;
           }
        return $imCalculationDetail;
    }


    public function find(int $id)
    {
        try {
            $imCalculationDetail= new IncomeExpenseResource($this->model->findOrFail($id));
            return response()->json([
                'imCalculationDetail'=>$imCalculationDetail
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data,$id):IncomeExpenseResource
    {
        $imCalculationDetail=$this->model->find($id);
        $imCalculationDetail->update($imCalculationDetail);
        return new IncomeExpenseResource($imCalculationDetail);
    }
    public function destroy($id)
    {
        $imCalculationDetail = $this->model->find($id);
        return $imCalculationDetail->delete();
        // return redirect()->back();
    }
}
