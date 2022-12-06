<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deficit extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'company_id', 'user_id'];
}
