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
        'compte',
        'designation',
        'amount',
        'general_cost_id',
    ];
}
