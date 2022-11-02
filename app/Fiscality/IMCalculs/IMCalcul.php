<?php

namespace App\Fiscality\IMCalculs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperIMCalcul
 */
class IMCalcul extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'total_items',
        'total_im',
    ];
}
