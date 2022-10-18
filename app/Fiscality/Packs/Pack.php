<?php

namespace App\Fiscality\Packs;

use App\Models\User;
use App\Fiscality\PackUsers\PackUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pack extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'max',
    ];
    public function user(){
        return $this->hasManyThrough(User::class,PackUser::class);
    }
    public function theuser(){
        return $this->hasMany(PackUser::class);
    }
}
