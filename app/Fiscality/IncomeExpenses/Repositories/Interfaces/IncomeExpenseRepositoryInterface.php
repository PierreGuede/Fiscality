<?php

namespace App\Fiscality\IncomeExpenses\Repositories\Interfaces;

use App\Fiscality\IncomeExpenses\IncomeExpense;
use App\Fiscality\IncomeExpenses\Resources\IncomeExpenseResource;

interface IncomeExpenseRepositoryInterface
{
    public function index();

    public function store(array $data): IncomeExpense;

    public function find(int $id);

    public function update(array $data, $id): IncomeExpenseResource;

    public function destroy($id);
}
