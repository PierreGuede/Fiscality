<?php

namespace App\Fiscality\RADetails;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperRADetail
 */
class RADetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'account',
        'name',
        'amount',
        'company_id',
        'code',
        'accounting_result_id',
    ];
}
