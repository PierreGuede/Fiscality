<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperGuruMinimumTax
 */
class GuruMinimumTax extends Model
{
    use HasFactory;

    //'collectable_product', 'volume'
    public const COLLECTABLE_PRODUCT = 'collectable_product';

    public const VOLUME = 'volume';

    protected $fillable = ['account ', 'name'];
}
