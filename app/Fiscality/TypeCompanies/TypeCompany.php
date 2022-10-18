<?php

namespace App\Fiscality\TypeCompanies;

use App\Fiscality\Companies\Company;
use App\Fiscality\TypeImpots\TypeImpot;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TypeCompany extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code',
    ];
    public function impot():BelongsToMany {
        return $this->belongsToMany(TypeImpot::class);
    }
    public function company():HasMany {
        return $this->hasMany(Company::class);
    }
}
