<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Fiscality\Companies\Company;
use App\Fiscality\PackUsers\PackUser;
use App\Fiscality\ProfileUsers\ProfileUser;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

/**
 * @mixin IdeHelperUser
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'firstname',
        'username',
        'email',
        'password',
        'user_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function personnel()
    {
        return $this->belongsToMany(Company::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * If the user is an enterprise, return the company. If the user is a cabinet, return the companies
     */
    public function company()
    {
        return $this->hasMany(Company::class);
    }

   public function profile()
   {
       return $this->hasOne(ProfileUser::class);
   }

    public function myPack()
    {
        return $this->hasOne(PackUser::class);
    }

    public function getAccount()
    {
        $profile = request()->user()->roles;
        foreach ($profile as $key => $value) {
            return $value->name;
        }
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->username = Str::slug(request()->name.request()->firstname.rand(0, 999));
            $model->password = bcrypt($model->password);
        });
    }
}
