<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinimumTax extends Model
{
    use HasFactory;

    protected $fillable = ['total', 'type', 'company_id', 'user_id', 'type_impot_id'];
}
