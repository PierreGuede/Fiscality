<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperCorporateTax
 */
class CorporateTax extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'company_id',
        'user_id',
    ];
}
