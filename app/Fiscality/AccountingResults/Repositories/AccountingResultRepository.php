<?php
namespace App\Fiscality\AccountingResults\Repositories;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\AccountingResults\Repositories\Interfaces\AccountingResultRepositoryInterface;

class AccountingResultRepository implements AccountingResultRepositoryInterface
{

    public function index()
    {
        $accountingResult=AccountingResult::all();
        return view('admin.accounting-result.index',['accountingResult'=>$accountingResult]);
    }

    public function store(array $data):AccountingResult
    {
        // $standarcode=Str::slug($data['name'],'_');
        $accountingResult=AccountingResult::create([
            'company_id'=>$data['company_id'],
            'total_incomes'=>$data['account'],
            'total_expenses'=>$data['name'],
            'ar_value'=>$data['ar_value'],
        ]);
        // return redirect()->route('accounting-result.index');
        return $accountingResult;
    }


    public function edit(AccountingResult $id)
    {
        return view('admin.accounting-result.update',['accountingResult'=>$id]);
    }

    public function update(array $data,$id):AccountingResult
    {
        $accountingResult=AccountingResult::find($id);
        $accountingResult->update(['company_id'=>$data['company_id'],
            'total_incomes'=>$data['account'],
            'total_expenses'=>$data['name'],
            'ar_value'=>$data['ar_value'],]);
        // return redirect()->route('accounting-result.index');
        return $accountingResult;

    }
    public function destroy($id)
    {
        $accountingResult = AccountingResult::find($id);
        return $accountingResult->delete();
        // return redirect()->route('accounting-result.index');
    }
}
