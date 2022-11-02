<?php

namespace App\Fiscality\IncomeExpenses\Repositories;

use App\Fiscality\IncomeExpenses\IncomeExpense;
use App\Fiscality\IncomeExpenses\Repositories\Interfaces\IncomeExpenseRepositoryInterface;
use App\Fiscality\IncomeExpenses\Resources\IncomeExpenseResource;
use Illuminate\Support\Str;

class IncomeExpenseRepository implements IncomeExpenseRepositoryInterface
{
    public $model;

    public $str;

    public function __construct(IncomeExpense $model, Str $str)
    {
        $this->model = $model;
        $this->str = $str;
    }

    public function index()
    {
        $incomeExpense = IncomeExpenseResource::collection($this->model->all());

        return response()->json([
            'incomeExpense' => $incomeExpense,
        ]);
    }

    public function store(array $data): IncomeExpense
    {
        try {
            $incomeExpense = $this->model->create($data);

            return $incomeExpense;
        } catch (\Throwable $th) {
            throw $th;
        }

        return $incomeExpense;
    }

    public function find(int $id)
    {
        try {
            $incomeExpense = new IncomeExpenseResource($this->model->findOrFail($id));

            return response()->json([
                'incomeExpense' => $incomeExpense,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data, $id): IncomeExpenseResource
    {
        $incomeExpense = $this->model->find($id);
        $incomeExpense->update($incomeExpense);

        return new IncomeExpenseResource($incomeExpense);
    }

    public function destroy($id)
    {
        $incomeExpense = $this->model->find($id);

        return $incomeExpense->delete();
        // return redirect()->back();
    }
}
