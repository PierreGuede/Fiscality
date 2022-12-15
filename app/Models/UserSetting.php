<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperUserSetting
 */
class UserSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'email_notification',
        'sms_notification',
        'whatsapp_notification',
        'user_id',
    ];
}
