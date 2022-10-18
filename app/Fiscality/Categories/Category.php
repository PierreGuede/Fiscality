<?php

namespace App\Fiscality\Categories;

use App\Fiscality\DetailTypes\DetailType;
use Illuminate\Database\Eloquent\Model;
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

}
