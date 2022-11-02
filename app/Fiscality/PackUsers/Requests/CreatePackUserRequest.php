<?php

namespace App\Fiscality\PackUsers\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePackUserRequest extends FormRequest
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
            'max' => ['required', 'integer', 'unique:packs'],
            'name' => ['required', 'string', 'max:255', 'unique::packs'],

        ];
    }
}
