<?php

namespace App\Fiscality\FinancialCosts;

use App\Fiscality\FinancialCostConditions\FinancialCostCondition;
use App\Fiscality\FinancialCostInterests\FinancialCostInterest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @mixin IdeHelperFinancialCost
 */
class FinancialCost extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'total_amount_reintegrated',
        'condition_amount_reintegrated',
        'interest_amount_reintegrated',
        'date',
        'company_id',
    ];
    public function financialCostCondition():HasOne{
        return $this->hasOne(FinancialCostCondition::class);
    }

    public function financialCostInterest():HasMany{
        return $this->hasMany(FinancialCostInterest::class);
    }

}
