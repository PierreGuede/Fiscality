<?php

namespace App\Fiscality\Vehicles;

use App\Fiscality\Amortizations\Amortization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'amortization_id'
    ];
    public function amortization():BelongsTo{
        return $this->belongsTo(Amortization::class);
    }
}
