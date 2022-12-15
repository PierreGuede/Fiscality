<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperMinimumTaxDetail
 */
class MinimumTaxDetail extends Model
{
    use HasFactory;

    protected $fillable = ['account', 'name', 'amount', 'type', 'minimum_tax_id', 'user_id', 'company_id', 'type_impot_id'];
}
