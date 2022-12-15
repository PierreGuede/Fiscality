<?php

namespace App\Fiscality\Excesss;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperExcess
 */
class Excess extends Model
{
    use HasFactory;

    protected $fillable = [
        'excess_amortzation_category_item_id',
        'taux_use',
        'taux_recommended',
        'ecart',
        'dotation',
        'deductible_amortization',
        'company_id',
    ];
}
