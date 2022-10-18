<?php

namespace App\Fiscality\AccountingResults\Controllers;

use App\Http\Controllers\Controller;
use App\Fiscality\AccountingResults\Repositories\Interfaces\AccountingResultRepositoryInterface;
use App\Fiscality\AccountingResults\Requests\CreateAccountingResultRequest;
use App\Fiscality\AccountingResults\Requests\UpdateAccountingResultRequest;

class AccountingResultController extends Controller
{
    public $accountingResultInterface;
    public function __construct(AccountingResultRepositoryInterface $accountingResultInterface)
    {
        $this->accountingResultInterface=$accountingResultInterface;
    }

    public function index()
    {
        return $this->accountingResultInterface->index();
    }

    public function store(CreateAccountingResultRequest $request)
    {
        $this->accountingResultInterface->store($request->all());
        return response()->json(["message"=> "success"]);
    }

    public function update(UpdateAccountingResultRequest $request,$id)
    {
        $this->accountingResultInterface->update($request->all(),$id);
        return response()->json(["message"=> "success"]);
    }

    public function destroy($id)
    {
        $this->accountingResultInterface->destroy($id);
        return response()->json(["message"=> "success"]);
    }
}
