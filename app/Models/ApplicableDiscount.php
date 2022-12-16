<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicableDiscount extends Model
{
    use HasFactory;
    const FIRST_YEAR="first_year";
    const SECOND_YEAR="second_year";
    const THIRD_YEAR="third_year";

    const FIRST_YEAR_RATE_NE="first_year_ne";
    const SECOND_YEAR_RATE_NE="second_year_ne";
    const THIRD_YEAR_RATE_NE="third_year_ne";

    const FIRST_YEAR_RATE_CGA="first_year_rate_cga";
    const SECOND_YEAR_RATE_CGA="second_year_rate_cga";
    const THIRD_YEAR_RATE_CGA="third_year_rate_cga";

    const FIRST_YEAR_RATE_SU="first_year_rate_su";
    const SECOND_YEAR_RATE_SU="second_year_rate_su";
    const THIRD_YEAR_RATE_SU="third_year_rate_su";

    protected $fillable=[
        'code',
        'rate',
        'applicable_year',
        'discount_type_id',
    ];
}
