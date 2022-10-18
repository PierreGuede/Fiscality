<?php

namespace App\Fiscality\IncomeExpenses\Controllers;

use App\Http\Controllers\Controller;
use App\Fiscality\IncomeExpenses\IncomeExpense;
use App\Fiscality\IncomeExpenses\Requests\CreateIncomeExpenseRequest;
use App\Fiscality\IncomeExpenses\Requests\UpdateIncomeExpenseRequest;
use App\Fiscality\IncomeExpenses\Repositories\Interfaces\IncomeExpenseRepositoryInterface;

class IncomeExpenseController extends Controller
{
    public $incomeExpenseRepositoryInterface;
    public function __construct(IncomeExpenseRepositoryInterface $incomeExpenseRepositoryInterface)
    {
        $this->incomeExpenseRepositoryInterface=$incomeExpenseRepositoryInterface;
    }

    public function index()
    {
        return $this->incomeExpenseRepositoryInterface->index();
    }

    public function store(CreateIncomeExpenseRequest $request)
    {
        $this->incomeExpenseRepositoryInterface->store($request->all());
        return response()->json(["message"=> "success"]);
    }

    public function update(UpdateIncomeExpenseRequest $request,$id)
    {
        $this->incomeExpenseRepositoryInterface->update($request->all(),$id);
        return response()->json(["message"=> "success"]);
    }

    public function destroy($id)
    {
        $this->incomeExpenseRepositoryInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }
}
