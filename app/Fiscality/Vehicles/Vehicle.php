<?php

namespace App\Fiscality\Vehicles;

use App\Fiscality\Amortizations\Amortization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperVehicle
 */
class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicless';

    protected $fillable = [
        'name',
        'value',
        'plafond',
        'dotation',
        'ecart',
        'deductible_amortization',
        'date',
        'amortization_id',
        'company_id',
    ];

    public function amortization(): BelongsTo
    {
        return $this->belongsTo(Amortization::class);
    }
}
