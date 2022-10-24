<?php

namespace App\Fiscality\Categories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Fiscality\DetailTypes\DetailType;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
    ];

    public function detailType():HasMany {
        return $this->hasMany(DetailType::class);
    }

    protected static function boot(){
        parent::boot();
        static::creating(function ($model) {
           $model->code= Str::slug(request()->code.'_');
        });
    }
}
