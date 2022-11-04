<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccuredChargeCompany extends Model
{
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
