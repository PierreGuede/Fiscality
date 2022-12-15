<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperExcessAmortzationCategory
 */
class ExcessAmortzationCategory extends Model
{
    public const FIRST = 'FIRST';

    public const SECOND = 'SECOND';

    public const THIRD = 'THIRD';

    use HasFactory;

    protected $fillable = ['code', 'name'];
}
