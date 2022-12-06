<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IRCMOnExpenseDetail extends Model
{
    use HasFactory;

    protected $fillable = ['field', 'amount', 'is_selected', 'company_id', 'user_id', 'i_r_c_m_on_expense_id'];
}
