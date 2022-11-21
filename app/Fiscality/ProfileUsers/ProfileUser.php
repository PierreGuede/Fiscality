<?php

namespace App\Fiscality\ProfileUsers;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperProfileUser
 */
class ProfileUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'ifu',
        'ifu_file',
        'rccm',
        'rccm_file',
        'born_day',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
