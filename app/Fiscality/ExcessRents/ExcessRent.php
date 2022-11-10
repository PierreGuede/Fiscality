<?php

namespace App\Fiscality\ExcessRents;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperExcessRent
 */
class ExcessRent extends Model
{
    use HasFactory;

    protected $fillable = [
        'rent_amount',
        'rental_period_year',
        'annual_deduction_limit',
        'applicable_deduction_limit',
        'amount_rent_reintegrated',
        'company_id',
    ];
}
