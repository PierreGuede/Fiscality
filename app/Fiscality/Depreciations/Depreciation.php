<?php

namespace App\Fiscality\Depreciations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperDepreciation
 */
class Depreciation extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_imo',
        'designation',
        'dotation',
        'company_id',
    ];
}
