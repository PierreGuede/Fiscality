<?php

namespace App\Fiscality\CommissionOnPurchases;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommissionOnPurchase extends Model
{
    use HasFactory;
    protected $fillable=[
        'renseigned_commission',
        'company_id',
    ];
}
