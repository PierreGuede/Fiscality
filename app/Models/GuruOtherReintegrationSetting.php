<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruOtherReintegrationSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'bceao_interest_rate',
        'minimum_rate',
        'rate_deductibility_limit',
        'commission_on_purchase',
        'redevance_deduction_rate_limit',
        'assistance_cost_deduction_rate_limit',
        'state_donation_limit',
        'state_donation_rate_thousandth',
        'advertising_gifts_deduction_limit',
        'excess_rent_applicable_deduction_limit',
        'annual_deduction_limit',
    ];
}
