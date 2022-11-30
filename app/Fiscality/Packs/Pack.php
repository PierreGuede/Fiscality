<?php

namespace App\Fiscality\Packs;

use App\Fiscality\PackUsers\PackUser;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperPack
 */
class Pack extends Model
{
    public const CABINET = 'cabinet';

    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'max',
    ];

    public function user()
    {
        return $this->hasManyThrough(User::class, PackUser::class);
    }

    public function theuser()
    {
        return $this->hasMany(PackUser::class);
    }
}
