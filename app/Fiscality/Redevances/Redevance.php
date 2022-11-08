<?php

namespace App\Fiscality\Redevances;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperRedevance
 */
class Redevance extends Model
{
    use HasFactory;

    protected $fillable = ['Account', 'designation', 'amount', 'turnover', 'deduction_limit', 'amount_reintegrated'];
}
