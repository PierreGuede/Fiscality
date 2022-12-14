<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperDeduction
 */
class Deduction extends Model
{
    use HasFactory;

    protected $table = 'deduction';

    protected $fillable = [
        'reversals_provisions',
        'total_financial_product',
        'capital_gain',
        'currency_transaction_change',
        'total_deduction',
        'company_id',
    ];
}
