<?php

namespace App\Http\Livewire\AccuredCharge;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Models\AccuredChargeCompany;
use Carbon\Carbon;
use Livewire\Component;

class ProvisionProvisioneCard extends Component
{
    public Amortization $data;

    public Company $company;

    public $total = 0;

    protected $listeners = ['refreshProvision'];

    public function mount($company)
    {
        $this->company = $company;
        $this->total = AccuredChargeCompany::where('type', 'provision')->whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->sum('amount');
    }

    public function render()
    {
        return view('livewire.accured-charge.provision-provisione-card');
    }

    public function refreshProvision()
    {
        $this->total = AccuredChargeCompany::where('type', 'provision')->whereCompanyId($this->company->id)->whereYear(Carbon::now()->year)->sum('amount');
    }
}
