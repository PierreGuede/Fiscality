<?php

namespace App\Fiscality\RedevanceDetails;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperRedevanceDetail
 */
class RedevanceDetail extends Model
{
    use HasFactory;

    protected $fillable = ['account', 'designation', 'amount', 'redevance_id', 'company_id'];
}
