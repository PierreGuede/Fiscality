<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialProduct extends Model
{
    use HasFactory;

    protected $table = 'financial_product';

    protected $fillable = ['total_other_product_rcm', 'total_income_securities_issued', 'total_financial_product_amount', 'company_id'];
}
