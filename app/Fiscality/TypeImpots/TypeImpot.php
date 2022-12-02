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

    public const IS = 'is';

    //    Impôt sur les Bénéfices d'Affaires
    public const IBA = 'iba';

    public const IRCM_SUR_CHARGES = 'ircm_sur_charges_non_deductible';

    public const IRCM_SUR_RESULTAT = 'ircm_sur_resulats_net_comptable';

    protected $fillable = [
        'name',
        'code',
    ];

    public function detailType(): HasMany
    {
        return $this->hasMany(DetailType::class);
    }
}
