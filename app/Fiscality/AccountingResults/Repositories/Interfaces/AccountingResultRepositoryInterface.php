<?php
namespace App\Fiscality\AccountingResults\Repositories\Interfaces;

use App\Fiscality\AccountingResults\AccountingResult;

interface AccountingResultRepositoryInterface
{
    public function index();
    public function store(array $data):AccountingResult;
    public function update(array $data,$id):AccountingResult;
    public function destroy($id);
}
