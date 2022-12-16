<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountType extends Model
{
    use HasFactory;
    const NOUVELLE_ENTREPRISE="NE";
    const CGA="CGA";
    const START_UP="SU";
    const ENTREPRISE_CONVENTIONNE="EC";

    protected $fillable=[
        'code',
        'name',
        'type_impot_id',
    ];
}
