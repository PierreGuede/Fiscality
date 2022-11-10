<?php

namespace App\Fiscality\FinancialCostInterests;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperFinancialCostInterest
 */
class FinancialCostInterest extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount_reintegrated',
        'amount_contribution',
        'amount_interest_recorded',
        'interest_rate_charged',
        'bceao_interest_rate_for_the_year',
        'maximum_rate',
        'rate_surplus',
        'financial_cost_id',
    ];
}
