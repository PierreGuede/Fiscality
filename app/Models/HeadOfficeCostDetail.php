<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperHeadOfficeCostDetail
 */
class HeadOfficeCostDetail extends Model
{
    use HasFactory;

    protected $casts = [
        'amount' => 'float',
    ];

    protected $fillable = ['account',
        'name',
        'amount',
        'company_id',
        'head_office_cost_id',
    ];
}
