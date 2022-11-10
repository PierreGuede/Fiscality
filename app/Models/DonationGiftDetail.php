<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperDonationGiftDetail
 */
class DonationGiftDetail extends Model
{
    use HasFactory;

    protected $fillable = ['account', 'name', 'amount', 'donation_grant_contribution_id', 'company_id'];
}
