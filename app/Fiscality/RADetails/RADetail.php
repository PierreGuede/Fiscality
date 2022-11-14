<?php

namespace App\Fiscality\RADetails;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperRADetail
 */
class RADetail extends Model
{
    use HasFactory;

    public const INCOME = 'income';

    public const EXPENSE = 'expense';

    protected $fillable = [
        'account',
        'type',
        'name',
        'amount',
        'company_id',
        'code',
        'accounting_result_id',
    ];
}
