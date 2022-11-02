<?php

namespace App\Fiscality\PrincipalActivities;

use App\Fiscality\Domains\Domain;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperPrincipalActivity
 */
class PrincipalActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'domain_id',
    ];

    public function domain(): BelongsTo
    {
        return $this->belongsTo(Domain::class);
    }
}
