<?php

namespace App\Fiscality\Companies;

use App\Fiscality\Categories\Category;
use App\Fiscality\DetailTypes\DetailType;
use App\Fiscality\Domains\Domain;
use App\Fiscality\TaxCenters\TaxCenter;
use App\Fiscality\TypeCompanies\TypeCompany;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperCompany
 */
class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name',
        'social_reason',
        'created_date',
        'ifu',
        'path',
        'rccm',
        'path_rccm',
        'email',
        'celphone',
        'centre',
        'type_company_id',
        'category_id',
        'domain_id',
        'company_id',
        'tax_center_id',
        'user_id',

    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function company(): BelongsTo
    {
        return $this->BelongsTo(Company::class);
    }

    public function typeCompany(): BelongsTo
    {
        return $this->BelongsTo(TypeCompany::class);
    }

    public function domain(): BelongsTo
    {
        return $this->BelongsTo(Domain::class);
    }

    public function childrenCompany(): HasMany
    {
        return $this->hasMany(Company::class);
    }

    public function category(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function detailType(): BelongsToMany
    {
        return $this->BelongsToMany(DetailType::class);
    }

    public function taxCenter(): BelongsTo
    {
        return $this->BelongsTo(TaxCenter::class);
    }
}
