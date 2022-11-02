<?php

namespace App\Fiscality\TypeImpots;

use App\Fiscality\DetailTypes\DetailType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperTypeImpot
 */
class TypeImpot extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
    ];

    public function detailType(): HasMany
    {
        return $this->hasMany(DetailType::class);
    }
}
