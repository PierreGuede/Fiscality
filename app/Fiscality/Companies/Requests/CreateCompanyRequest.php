<?php

namespace App\Fiscality\Companies\Requests;

use App\Fiscality\Companies\Company;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'name' => [Rule::when(auth()->user()->roles[0] == Company::CARBINET, ['required', 'string', 'max:255'])],
            'rccm' => [Rule::when(auth()->user()->roles[0] == Company::CARBINET ,['required', 'string', 'max:14', 'unique:companies'])],
            'path_rccm' => [Rule::when(auth()->user()->roles[0] == Company::CARBINET,['required', 'file', 'mimes:pdf', 'max:4000'])],
            'created_date' =>[Rule::when(auth()->user()->roles[0] == Company::CARBINET, ['required', 'string', 'max:255'])],
            'ifu' =>[Rule::when(auth()->user()->roles[0] == Company::CARBINET, ['required', 'integer', 'digits:12', 'unique:companies'])],
            'path' =>[Rule::when(auth()->user()->roles[0] == Company::CARBINET, ['required', 'file', 'mimes:pdf', 'max:4000'])],
            'email' => ['required', 'string', 'max:255'],
            'celphone' =>[Rule::when(auth()->user()->roles[0] == Company::CARBINET, ['required', 'string', 'max:255'])],
            'centre' => ['required', 'string', 'max:255'],
        ];
    }
}
