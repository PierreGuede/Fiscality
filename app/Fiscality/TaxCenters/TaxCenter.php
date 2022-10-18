<?php

namespace App\Fiscality\TaxCenters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxCenter extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'code',
    ];

}
