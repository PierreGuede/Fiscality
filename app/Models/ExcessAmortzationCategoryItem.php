<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperExcessAmortzationCategoryItem
 */
class ExcessAmortzationCategoryItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'rate',
        'excess_amortzation_category_id',
    ];
}
