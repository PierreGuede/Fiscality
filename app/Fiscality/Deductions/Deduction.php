<?php

namespace App\Fiscality\Deductions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    use HasFactory;
    protected $fillable=[
        'total_product_amount',
        'company_id'
    ];
}
