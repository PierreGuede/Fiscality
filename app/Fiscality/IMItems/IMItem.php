<?php

namespace App\Fiscality\IMItems;

use App\Fiscality\Bases\Base;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IMItem extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',	'base_id',
    ];
    public function bases(){
        return $this->belongsTo(Base::class);
    }
}
