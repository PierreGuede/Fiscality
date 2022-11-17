<?php

namespace App\Fiscality\GeneralCostDetails;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperGeneralCostDetail
 */
class GeneralCostDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'account',
        'name',
        'amount',
        'general_cost_id',
        'company_id',
    ];
}
