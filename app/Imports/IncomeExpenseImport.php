<?php

namespace App\Imports;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class IncomeExpenseImport implements  WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            'Balance des comptes' => new RADetailImport(),
        ];
    }
}
