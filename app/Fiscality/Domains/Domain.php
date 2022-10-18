<?php

namespace App\Fiscality\Domains;

use App\Fiscality\Companies\Company;
use App\Fiscality\PrincipalActivities\PrincipalActivity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Domain extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code',
    ];

    public function company():HasMany {
        return $this->hasMany(Company::class);
    }

    public function principalActivity():HasMany {
        return $this->hasMany(PrincipalActivity::class);
    }
}
