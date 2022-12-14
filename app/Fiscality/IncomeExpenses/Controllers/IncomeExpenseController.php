<?php

namespace App\Fiscality\IncomeExpenses\Controllers;

use App\Fiscality\IncomeExpenses\Repositories\Interfaces\IncomeExpenseRepositoryInterface;
use App\Fiscality\IncomeExpenses\Requests\CreateIncomeExpenseRequest;
use App\Fiscality\IncomeExpenses\Requests\UpdateIncomeExpenseRequest;
use App\Http\Controllers\Controller;

class IncomeExpenseController extends Controller
{
    public $incomeExpenseRepositoryInterface;

    public function __construct(IncomeExpenseRepositoryInterface $incomeExpenseRepositoryInterface)
    {
        $this->incomeExpenseRepositoryInterface = $incomeExpenseRepositoryInterface;
    }

    public function index()
    {
        return $this->incomeExpenseRepositoryInterface->index();
    }

    public function store(CreateIncomeExpenseRequest $request)
    {
        $incomeExpense = $this->incomeExpenseRepositoryInterface->store($request->validated());

        return response()->json(['incomeExpense' => $incomeExpense, 'message' => 'Enregistrement bien effectué']);
    }

    public function find($id)
    {
        return $this->incomeExpenseRepositoryInterface->find($id);
    }

    public function update(UpdateIncomeExpenseRequest $request, $id)
    {
        $incomeExpense = $this->incomeExpenseRepositoryInterface->update($request->validated(), $id);

        return response()->json(['incomeExpense' => $incomeExpense, 'message' => 'Modifié avec succès']);
    }

    public function destroy($id)
    {
        $this->incomeExpenseRepositoryInterface->destroy($id);

        return response()->json(['message' => 'success']);
    }
}
