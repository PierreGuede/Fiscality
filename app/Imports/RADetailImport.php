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
        $exist = AccountingResult::whereCompanyId($company->id)->first();

        if (is_null($exist)) {
            $total_data = array_sum(array_column($rows->toArray(), 'amount'));
            $accounting_result = AccountingResult::create([
                'total_incomes' => $total_data,
                'total_expenses' => 0,
                'ar_value' => $total_data - 0,
                'company_id' => $company->id,
            ]);

            $this->add($rows, $accounting_result);
        } else {
            $total_data = array_sum(array_column($rows->toArray(), 'amount'));
            $exist->total_incomes = $total_data;
            $exist->ar_value = (float) $total_data - (float) $exist->total_expenses;
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
