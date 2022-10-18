<?php

namespace App\Fiscality\IncomeExpenses;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeExpense extends Model
{
    use HasFactory;
    protected $fillable=[
        'account',
        'name',
        'type'
    ];
}
