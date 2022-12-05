<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessProfitTax extends Model
{
    use HasFactory;

    protected $fillable = ['total', 'type', 'company_id', 'user_id'];
}
