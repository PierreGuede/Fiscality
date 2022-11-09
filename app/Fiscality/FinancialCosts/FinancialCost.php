<?php

namespace App\Fiscality\FinancialCosts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperFinancialCost
 */
class FinancialCost extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
'total_amount_reintegrated',
'condition_amount_reintegrated',
'interest_amount_reintegrated',
'date',
'company_id',
    ];
}
