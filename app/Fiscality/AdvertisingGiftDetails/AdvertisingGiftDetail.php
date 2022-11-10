<?php

namespace App\Fiscality\AdvertisingGiftDetails;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperAdvertisingGiftDetail
 */
class AdvertisingGiftDetail extends Model
{
    use HasFactory;

    protected $fillable = ['advertising_gift_id', 'company_id', 'name', 'amount'];
}
