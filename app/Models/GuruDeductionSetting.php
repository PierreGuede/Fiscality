<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin IdeHelperGuruDeductionSetting
 */
class GuruDeductionSetting extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'rate_proceed_government',
        'rcm_product_rate',
    ];
}
