<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAmortizationExcessRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category_imo' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('excesses')->ignore($excess)],
            'designation' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('excesses')->ignore($excess)],
            'taux_use' => ['sometimes', 'required', 'string', 'max:255'],
            'taux_recommended' => ['sometimes', 'required', 'string', 'max:255'],
            'ecart' => ['sometimes', 'required', 'string', 'max:255'],
            'dotation' => ['sometimes', 'required', 'string', 'max:255'],
            'deductible_amortization' => ['sometimes', 'required', 'string', 'max:255'],
        ];
    }
}
