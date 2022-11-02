<?php

namespace App\Fiscality\AccountingResults\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAccountingResultRequest extends FormRequest
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
            // 'name' => ['required', 'string', 'max:255','unique:type_impots'],
            'name' => [
                'required' => 'Vous devez renseigner le nom',
                'string' => 'Ce champ doit contenir une phrase ou un texte',
                'max:255' => 'le nom est trop long',
            ],
        ];
    }
}
