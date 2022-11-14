<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperAccuredChargeCompany
 */
class AccuredChargeCompany extends Model
{

    public const EXPENSE_PROVISIONED = 'expense_provisioned';
    public const PERSONNAL_PROVISION = 'personnal_provision';
    public const PROVISION = 'provision';

    use HasFactory;

    protected $fillable = [
        'compte',
        'designation',
        'type',
        'amount',
        'company_id',
        'date',
    ];
}
