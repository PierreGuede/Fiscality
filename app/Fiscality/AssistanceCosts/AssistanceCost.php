<?php

namespace App\Fiscality\AssistanceCosts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperAssistanceCost
 */
class AssistanceCost extends Model
{
    use HasFactory;
    protected $fillable =[
        'fat_amount',
        'general_cost',
        'limit_deduction',
        'reintegrate_amount',
        'company_id',
    ];
}
