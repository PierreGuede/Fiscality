<?php

namespace App\Fiscality\FinancialCostConditions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperFinancialCostCondition
 */
class FinancialCostCondition extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount_of_interest_recorded',
        'non_deductible_interest_amount',
        'deductible_interest_amount',
        'profit_before_tax',
        'interest_accrued',
        'depreciation_and_amortization',
        'allocations_to_provisions',
        'calculation_base',
        'deductibility_limit',
        'amount_reintegrate',
        'financial_cost_id',
    ];
}
