<?php

namespace App\Fiscality\Categories;

use App\Fiscality\DetailTypes\DetailType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

/**
 * @mixin IdeHelperCategory
 */
class Category extends Model
{
    public const IMPOT_REEL = 'IMPOT_REEL';

    public const IMPOT_MINIMUM = 'IMPOT_MINIMUM';

    public const IMPOT_MINIMUM_FORFETAIRE = 'IMPOT_MINIMUM_FORFETAIRE';

    use HasFactory;

    protected $fillable = [
        'name',
        'code',
    ];

    public function detailType(): HasMany
    {
        return $this->hasMany(DetailType::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->code = Str::slug(request()->code.'_');
        });
    }
}
