<?php

namespace App\Http\Livewire\AccountResult;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\Companies\Company;
use Carbon\Carbon;
use Livewire\Component;

class DetailsAccountResult extends Component
{
    public Company $company;

    public string $state = 'user_calculate_result';

    public $total = 0;

    public $total_incomes_expenses;

    public $listeners = ['refreshTotalCard'];

    public function mount(Company $company)
    {
        $this->company = $company;

        $account_result = AccountingResult::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        $this->fill([
            'total' => is_null($account_result) ? 0 : $account_result->ar_value,
        ]);
    }

    public function render()
    {
        $account_result = AccountingResult::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

        return view('livewire.account-result.details-account-result',compact('account_result'));
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

    public function refreshTotalCard()
    {
//        $account_result = AccountingResult::whereCompanyId($this->company->id)->whereYear(Carbon::now()->year)->first();
//        $this->total = is_null($account_result) ? 0 : $account_result->ar_value;
    }
}
