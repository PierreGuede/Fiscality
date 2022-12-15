<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperIRCMOnExpense
 */
class IRCMOnExpense extends Model
{
    use HasFactory;

    protected $fillable = ['total', 'amount', 'is_selected', 'company_id', 'user_id'];
}
