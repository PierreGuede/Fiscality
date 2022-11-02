<?php

namespace App\Fiscality\DetailTypes;

use App\Fiscality\Bases\Base;
use App\Fiscality\Categories\Category;
use App\Fiscality\TypeImpots\TypeImpot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

/**
 * @mixin IdeHelperDetailType
 */
class DetailType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'taux',
        'description',
        'article',
        'category_id',
        'base_id',
        'type_impot_id',
    ];
    // public $category ,$base ,$typeImpot;
    // public function __construct(Category $category, Base $base, TypeImpot $typeImpot)
    // {
    //     $this->category=$category;
    //     $this->base=$base;
    //     $this->typeImpot=$typeImpot;
    // }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function base(): BelongsTo
    {
        return $this->belongsTo(Base::class);
    }

    public function typeImpot()
    {
        return $this->belongsTo(TypeImpot::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->code = Str::slug(request()->type_impot_id.'_');
        });
    }
}
