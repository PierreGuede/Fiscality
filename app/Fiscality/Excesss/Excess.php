<?php

namespace App\Fiscality\Excesss;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excess extends Model
{
    use HasFactory;
    protected $fillable=[
        'category_imo',
        'designation',
        'taux_use',
        'taux_recommended',
        'ecart',
        'dotation',
        'deductible_amortization',
    ];
}
