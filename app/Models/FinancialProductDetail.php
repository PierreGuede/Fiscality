<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialProductDetail extends Model
{
    use HasFactory;

    public const INCOME = 'income_securities_issued';

    public const OTHER = 'income_securities_issued';

    protected $fillable = ['net_ircm_amount', 'rate', 'amount_deduct', 'type', 'financial_product_id', 'company_id'];
}
