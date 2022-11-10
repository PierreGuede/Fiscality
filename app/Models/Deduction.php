<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    use HasFactory;
    protected $table = 'deduction';
protected $fillable = ['reversals_provisions',
'financial_product',
'total_fiancial_product',
'capital_gain',
'currency_transaction_change',];
}
