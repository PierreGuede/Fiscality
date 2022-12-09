<?php

namespace App\Fiscality\TaxableIncomeBeforeHeadOfficeExpenses;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxableIncomeBeforeHeadOfficeExpenses extends Model
{
    use HasFactory;

    protected $table = 'taxable_income_head_office_expenses';
}
