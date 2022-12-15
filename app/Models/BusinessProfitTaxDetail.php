<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperBusinessProfitTaxDetail
 */
class BusinessProfitTaxDetail extends Model
{
    use HasFactory;

    protected $fillable = ['account', 'name', 'amount', 'type', 'business_profit_tax_id', 'user_id', 'company_id'];
}
