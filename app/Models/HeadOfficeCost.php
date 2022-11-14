<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeadOfficeCost extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_result',
        'total_reintegration',
        'total_deduction',
        'taxable_income_before_restatement_head_office_costs',
        'basis_calculating_deduction_limit',
        'deductible_head_office_costs',
        'non_deductible_head_office_costs',
        'company_id',
    ];
}
