<?php

namespace App\Http\Livewire\AccountResult;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\Companies\Company;
use Livewire\Component;

class DetailsAccountResult extends Component
{
    public Company $company;

    public string $state = 'user_calculate_result';

    public $total_incomes_expenses;

    public function mount(Company $company)
    {
        $this->company = $company;
    }

    public function render()
    {
        return view('livewire.account-result.details-account-result');
    }

    public function save()
    {
        AccountingResult::create([
            'total_incomes' => 0,
            'total_expenses' => 0,
            'ar_value' => (float) $this->total_incomes_expenses,
            'company_id' => $this->company->id,
        ]);

        $this->state = 'user_calculate_result';
    }
}
