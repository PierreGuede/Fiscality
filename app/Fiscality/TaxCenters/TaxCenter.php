<?php

namespace App\Fiscality\TaxCenters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperTaxCenter
 */
class TaxCenter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'code',
    ];
}
