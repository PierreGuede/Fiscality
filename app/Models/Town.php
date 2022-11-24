<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperTown
 */
class Town extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code'];
}
