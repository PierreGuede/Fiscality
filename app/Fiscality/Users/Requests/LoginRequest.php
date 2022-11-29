<?php

namespace App\Fiscality\Users\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class LoginRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'username' => ['required', 'string', 'regex:/\w*$/', 'max:255'],
            'email' => 'required|email',
            'remember' => 'boolean',
            'password' => ['required', Password::min(8)],
        ];
    }
}
