<?php

namespace App\Fiscality\CommissionOnPurchaseDetails;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperCommissionOnPurchaseDetail
 */
class CommissionOnPurchaseDetail extends Model
{
    use HasFactory;
    protected $fillable=[
        "Account",
        "designation",
        "total",
        "amount_commission",
        "limit",
        "no_deductible_amount",
        "commission_on_purchase_id",
    ];
}
