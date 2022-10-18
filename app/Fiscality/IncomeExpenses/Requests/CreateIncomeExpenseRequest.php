<?php

namespace App\Fiscality\IncomeExpenses\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateIncomeExpenseRequest extends FormRequest
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
            'account' => ['required', 'string', 'max:255','unique:income_expenses'],
            'name' => ['required', 'string', 'max:255','unique:income_expenses'],
        ];
    }
}
