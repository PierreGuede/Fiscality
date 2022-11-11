<?php

namespace App\Http\Livewire\AccountResult;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use Carbon\Carbon;
use Livewire\Component;

class IncomeCard extends Component
{
    public Amortization $data;

    public Company $company;

    public $total;

    protected $listeners = ['refreshIncome'];

    public function mount($company)
    {
        $this->company = $company;
        $this->total = AccountingResult::whereCompanyId($company->id)->whereYear('created_at', Carbon::now()->year)->first();
    }

    public function render()
    {
        return view('livewire.account-result.income-card');
    }

    public function refreshIncome()
    {
        $this->total =  AccountingResult::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();

    }
}
