<?php

namespace App\Fiscality\AdvertisingGifts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperAdvertisingGift
 */
class AdvertisingGift extends Model
{
    use HasFactory;

    protected $fillable = ['turnover', 'total_amount', 'deduction_limit', 'surplus_reintegrated', 'company_id'];
}
