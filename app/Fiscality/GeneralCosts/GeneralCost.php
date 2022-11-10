<?php

namespace App\Fiscality\GeneralCosts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperGeneralCost
 */
class GeneralCost extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_amount',
        'company_id',
    ];
}
