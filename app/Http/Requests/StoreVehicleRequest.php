<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleRequest extends FormRequest
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
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'value' => ['sometimes', 'required', 'string', 'max:255'],
            'plafond' => ['sometimes', 'required', 'string', 'max:255'],
            'ecart' => ['sometimes', 'required', 'string', 'max:255'],
            'dotation' => ['sometimes', 'required', 'string', 'max:255'],
            'deductible_amortization' => ['sometimes', 'required', 'string', 'max:255'],
            'date' => ['sometimes', 'required', 'string', 'max:255'],
        ];
    }
}
