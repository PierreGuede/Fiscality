<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AmortizationSetting extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'depreciation_base_limit',
        'recommended_rate',
        'company_id',
        'user_id',
    ];
}
