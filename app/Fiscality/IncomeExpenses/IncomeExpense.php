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

    protected $fillable = [
        'account',
        'name',
        'type',
    ];
}
