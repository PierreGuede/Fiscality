<?php

namespace App\Fiscality\Packs\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePackRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 'unique:packs'],
            'max' => ['required', 'integer', 'max:255', 'unique:packs'],
            'description' => ['required', 'string', 'max:255', 'unique:packs'],
        ];
    }
}
