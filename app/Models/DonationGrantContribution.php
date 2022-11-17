<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperDonationGrantContribution
 */
class DonationGrantContribution extends Model
{
    use HasFactory;

    protected $fillable = [
        'turnover',
        'limit',
        'thousandth_turnover',
        'total_state_donation',
        'surplus_state_donation',
        'total_donation_gift',
        'surplus_state',
        'company_id',
    ];
}
