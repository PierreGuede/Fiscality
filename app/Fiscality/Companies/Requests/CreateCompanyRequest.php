<?php

namespace App\Fiscality\Companies\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'rccm' => ['required', 'string', 'max:14', 'unique:companies'],
            'path_rccm' => ['required', 'file', 'mimes:pdf', 'max:4000'],
            'created_date' => ['required', 'string', 'max:255'],
            'ifu' => ['required', 'integer', 'digits:12', 'unique:companies'],
            'path' => ['required', 'file', 'mimes:pdf', 'max:4000'],
            'email' => ['required', 'string', 'max:255'],
            'celphone' => ['required', 'string', 'max:255'],
            'centre' => ['required', 'string', 'max:255'],
        ];
    }
}
