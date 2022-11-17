<?php

namespace App\Fiscality\AccuredCharges;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperAccuredCharge
 */
class AccuredCharge extends Model
{
    use HasFactory;

    public const EXPENSE_PROVISIONED = 'expense_provisioned';

    public const PERSONNAL_PROVISION = 'personnal_provision';

    public const PROVISION = 'provision';

    protected $fillable = [
        'compte',
        'designation',
        'type',
    ];
}
