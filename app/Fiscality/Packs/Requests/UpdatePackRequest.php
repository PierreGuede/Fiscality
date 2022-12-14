<?php

namespace App\Fiscality\Packs\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePackRequest extends FormRequest
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
            'name' => ['sometimes', 'required', 'string', 'max:255', Rule::unique('packs')->ignore($this->id)],
            'max' => ['required', 'integer', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
        ];
    }
}
