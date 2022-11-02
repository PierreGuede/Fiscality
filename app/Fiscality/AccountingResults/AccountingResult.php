<?php

namespace App\Fiscality\AccountingResults;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperAccountingResult
 */
class AccountingResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'total_incomes',
        'total_expenses',
        'ar_value',
    ];
}
