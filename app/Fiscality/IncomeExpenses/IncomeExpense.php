<?php

namespace App\Fiscality\IncomeExpenses;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperIncomeExpense
 */
class IncomeExpense extends Model
{
    use HasFactory;
    public const INCOME="income";
    public const EXPENSE="expense";

    protected $fillable = [
        'account',
        'name',
        'type',
    ];
}
