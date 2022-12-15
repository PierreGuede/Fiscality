<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperRealTax
 */
class RealTax extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'company_id',
        'user_id',
        'corporate_tax_id',
    ];
}
