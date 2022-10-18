<?php

namespace App\Fiscality\AmortizationDetails;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmortizationDetails extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'value',
        'plafond',
        'ecart',
        'dotation',
        'deductible_amortization',
        'date',
        'amortization_id'
    ];
}
