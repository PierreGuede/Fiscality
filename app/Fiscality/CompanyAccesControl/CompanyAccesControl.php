<?php

namespace App\Fiscality\CompanyAccesControl;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperCompanyAccesControl
 */
class CompanyAccesControl extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'company_id', 'is_disconnected'];
}
