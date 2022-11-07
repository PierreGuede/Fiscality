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

    protected $fillable = [
        'compte',
        'designation',
        'type',
    ];
}
