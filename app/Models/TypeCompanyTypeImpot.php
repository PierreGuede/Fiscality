<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCompanyTypeImpot extends Model
{
    use HasFactory;

    protected $table = 'type_company_type_impot';

    protected $fillable = [
        'type_company_id',
        'type_impot_id',
    ];
}
