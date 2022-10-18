<?php

namespace App\Fiscality\PackUsers;

use App\Models\User;
use App\Fiscality\Packs\Pack;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PackUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'pack_id',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function packs(){
        return $this->belongsTo(Pack::class,'pack_id');
    }
}
