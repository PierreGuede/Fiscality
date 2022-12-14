<?php

namespace App\Http\Livewire\AccuredCharge;

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
        $data = AccuredChargeCompany::where('type', AccuredChargeCompany::EXPENSE_PROVISIONED)->whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->get();
        $this->total =  array_sum(array_column($data->toArray(),'amount'));

    }

    public function render()
    {
        return view('livewire.accured-charge.expense-provisioned-card');
    }

    public function refreshExpenseProvision()
    {
        $data = AccuredChargeCompany::where('type', AccuredChargeCompany::EXPENSE_PROVISIONED)->whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->get();
        $this->total =  array_sum(array_column($data->toArray(),'amount'));
    }
}
