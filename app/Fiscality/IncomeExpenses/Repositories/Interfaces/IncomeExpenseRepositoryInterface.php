<?php
namespace App\Fiscality\IncomeExpenses\Repositories\Interfaces;

use App\Fiscality\IncomeExpenses\IncomeExpense;

interface IncomeExpenseRepositoryInterface
{
    public function index();
    public function store(array $data):IncomeExpense;
    public function update(array $data,$id):IncomeExpense;
    public function destroy($id);
}
