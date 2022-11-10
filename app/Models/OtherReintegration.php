<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperOtherReintegration
 */
class OtherReintegration extends Model
{
    use HasFactory;

    protected $fillable = [
        'expense_not_related',
        'unjustfified_expense',
        'remuneration_not_subject_withholding_tax',
        'financial_cost',
        'commission_on_purchase',
        'commission_insurance_broker',
        'redevance',
        'accountind_financial_technical_assistance_costs',
        'interest_paid',
        'donation_grant_contribution',
        'advertising_gift',
        'sumptuary_expenses',
        'occult_remuneration',
        'motor_vehicle_tax',
        'income_tax',
        'fines_penalities',
        'past_assets',
        'other_non_deductible_expense',
        'variation_conversation_gap',
        'excess_rent',
        'other_non_deductible_expenses',
        'company_id',
    ];
}
