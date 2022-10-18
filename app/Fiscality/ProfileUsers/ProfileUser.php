<?php

namespace App\Fiscality\ProfileUsers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfileUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'ifu',
        'path',
        'rccm',
        'path_rccm',
        'born_day',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
