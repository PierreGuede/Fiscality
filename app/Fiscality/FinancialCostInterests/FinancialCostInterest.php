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

    public const LIBERATION_CONDITION = 'liberation_condition';

    public const DELAY_CONDITION = 'delay_condition';

    public const RATE_CONDITION = 'rate_condition';

    protected $fillable = [
        'amount_reintegrated',
        'amount_contribution',
        'amount_interest_recorded',
        'interest_rate_charged',
        'bceao_interest_rate_for_the_year',
        'maximum_rate',
        'rate_surplus',
        'type',
        'financial_cost_id',
    ];
}
