<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Fiscality\Companies\Company;
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

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
        'two_factor_expires_at',
    ];

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
        'email_verified_at',
        'two_factor_code',
        'two_factor_expires_at',
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
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * If the user is an enterprise, return the company. If the user is a cabinet, return the companies
     */
    public function company()
    {
        return $this->hasMany(Company::class);
    }

    /**
     * If the user is an enterprise, return the company. If the user is a cabinet, return the companies
     */
    public function userSetting()
    {
        return $this->hasOne(UserSetting::class);
    }

    public function getWorkspaceCompany()
    {
        return $this->belongsToMany(Company::class);
    }

   public function profile()
   {
       return $this->hasOne(ProfileUser::class);
   }

    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }

    public function getAccount()
    {
        $profile = request()->user()->roles;
        foreach ($profile as $key => $value) {
            return $value->name;
        }
    }

    public function generateTwoFactorCode()
    {
        $this->timestamps = false;
        $this->two_factor_code = rand(100000, 999999);
        $this->two_factor_expires_at = now()->addMinutes(10);
        $this->save();
    }

    public function resetTwoFactorCode()
    {
        $this->timestamps = false;
        $this->two_factor_code = null;
        $this->two_factor_expires_at = null;
        $this->save();
    }

//    protected static function boot()
//    {
//        parent::boot();
//        static::creating(function ($model) {
////            $model->username = Str::slug(request()->name.request()->firstname.rand(0, 999));
//            $model->password = bcrypt($model->password);
//        });
//    }
}
