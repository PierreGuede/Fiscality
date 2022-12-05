<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IRCMOnExpense extends Model
{
    use HasFactory;

//$table->string('field');
//$table->decimal('amount', 15,2);
//$table->boolean('is_selected')->default(true);
//$table->foreignIdFor(\App\Fiscality\Companies\Company::class)->constrained();
//$table->foreignIdFor(\App\Models\User::class)->constrained();
//$table->foreignIdFor(\App\Models\IRCMOnExpense::class)->constrained();
    protected $fillable = ['total', 'amount', 'is_selected', 'company_id', 'user_id' ];

}
