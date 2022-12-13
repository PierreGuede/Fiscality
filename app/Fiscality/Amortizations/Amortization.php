<?php

namespace App\Fiscality\Amortizations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperAmortization
 */
class Amortization extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
}
