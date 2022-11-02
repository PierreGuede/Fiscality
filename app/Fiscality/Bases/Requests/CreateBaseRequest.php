<?php

namespace App\Fiscality\Bases\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBaseRequest extends FormRequest
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
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Le nom est requis',
            'name.string' => 'Le nom est dois etre un texte',
            'name.max' => 'Le nom ne est trop long',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
        ];
    }
}
