<?php

namespace App\Imports;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\Companies\Company;
use App\Models\RADetail;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RADetailImport implements ToCollection, WithHeadingRow
{

    public function collection(Collection $rows)
    {

        $company= Company::whereEmail($rows[0]['company_email'])->first();
        $type= $rows[0]['type'];
        $exist = AccountingResult::whereCompanyId($company->id)->first();

        if (is_null($exist)) {
            $total_data = array_sum(array_column($rows->toArray(), 'amount'));
            $accounting_result = AccountingResult::create([
                'total_incomes' => $type == \App\Fiscality\RADetails\RADetail::INCOME ?   $total_data : 0,
                'total_expenses' => $type == \App\Fiscality\RADetails\RADetail::EXPENSE ?   $total_data : 0,
                'ar_value' => $total_data ,
                'company_id' => $company->id,
            ]);

            $this->add($rows, $accounting_result);
        } else {
            $total_data = array_sum(array_column($rows->toArray(), 'amount'));
            if ($type == \App\Fiscality\RADetails\RADetail::INCOME) {
                $exist->total_incomes = $total_data;
                $exist->ar_value = (float) $total_data - (float) $exist->total_expenses;
            } else {
                $exist->total_expenses = $total_data;
                $exist->ar_value = $exist->total_incomes - $total_data;
            }
            $this->add($rows, $exist);

            $exist->save();
        }

    }

    private function add( Collection $rows,$accounting_result){
        foreach ($rows as $row)
        {
            $company= Company::whereEmail($row['company_email'])->first();
            \App\Fiscality\RADetails\RADetail::create([
                'account' => $row['account'],
                'name' => $row['name'],
                'amount' => $row['amount'],
                'type' => $row['type'],
                'code' => Str::slug($row['name']).'_'.Carbon::now()->year.'_'. $company->id,
                'accounting_result_id' => $accounting_result->id,
                'company_id' => $company->id,
            ]);
        }
    }

}
