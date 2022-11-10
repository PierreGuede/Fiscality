<?php

namespace App\Http\Livewire;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\Companies\Company;
use Carbon\Carbon;
use Livewire\Component;

class TotalCard extends Component
{
    public $total;

    public Company $company;

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
        return view('livewire.total-card');
    }

    public function refreshTotalCard()
    {
        $account_result = AccountingResult::whereCompanyId($this->company->id)->whereYear(Carbon::now()->year)->first();
        $this->total = is_null($account_result) ? 0 : $account_result->ar_value;
    }
}
