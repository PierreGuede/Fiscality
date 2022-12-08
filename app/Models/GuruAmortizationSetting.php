<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruAmortizationSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'depreciation_base_limit',
        'recommended_rate',
    ];
}
