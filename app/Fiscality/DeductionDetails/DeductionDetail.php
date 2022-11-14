<?php

namespace App\Fiscality\DeductionDetails;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeductionDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rcm_net_amount',
        'rate',
        'deductible_amount',
        'deduction_id',
    ];
}
