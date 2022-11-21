<?php

namespace App\Models;

use App\Fiscality\Packs\Pack;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperSubscription
 */
class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'pack_id',
        'user_id',
        'ref_payment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function packs()
    {
        return $this->belongsTo(Pack::class, 'pack_id');
    }
}
