<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\AccountingResults\Repositories\Interfaces\AccountingResultRepositoryInterface;

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

    public function store(Request $request)
    {
        $this->accountingResultInterface->store($request->all());
        return response()->json(["message"=> "success"]);
    }

    public function update(Request $request,$id)
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
