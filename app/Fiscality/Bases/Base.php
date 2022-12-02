<?php

namespace App\Fiscality\Bases;

use App\Fiscality\DetailTypes\DetailType;
use App\Fiscality\IMItems\IMItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperBase
 */
class Base extends Model
{
    use HasFactory;

    public const BENEFICE_FISCAL = 'BF';

    public const PRODUIT_ENCAISSABLE = 'PE';

    public const VOLUME = 'VO';

    public const BENEFICE_AFFAIRE = 'BA';

    protected $fillable = [
        'name',
    ];

    public function detailType(): HasMany
    {
        return $this->hasMany(DetailType::class);
    }

    public function itemsIM(): HasMany
    {
        return $this->hasMany(IMItem::class);
    }
}
