<?php

namespace App\Http\Livewire\AccuredCharge;

use App\Fiscality\AccountingResults\AccountingResult;
use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Models\AccuredChargeCompany;
use Carbon\Carbon;
use Livewire\Component;

class ExpenseProvisionedCard extends Component
{
    public Amortization $data;

    public Company $company;

    public $total = 0;

    protected $listeners = ['refreshExpenseProvision'];

    public function mount($company)
    {
        $this->company = $company;
        $this->total = AccuredChargeCompany::where('type', 'charges')->whereCompanyId($this->company->id)->whereYear( 'created_at',Carbon::now()->year)->first();
    }

    public function render()
    {
        return view('livewire.accured-charge.expense-provisioned-card');
    }

    public function refreshExpenseProvision()
    {
        $this->total = AccuredChargeCompany::where('type', 'charges')->whereCompanyId( $this->company->id)->whereYear( Carbon::now()->year)->first();
    }
}
