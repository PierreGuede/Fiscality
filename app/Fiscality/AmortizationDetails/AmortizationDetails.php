<?php

namespace App\Fiscality\AmortizationDetails;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperAmortizationDetails
 */
class AmortizationDetails extends Model
{
    use HasFactory;

    protected $table = "amortization_details";

    protected $fillable = [
        'name',
        'value',
        'plafond',
        'ecart',
        'dotation',
        'deductible_amortization',
        'date',
        'amortization_id',
    ];
}
