<?php

namespace App\Http\Livewire\AccuredCharge;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Models\AccuredChargeCompany;
use Carbon\Carbon;
use Livewire\Component;

class PersonnalProvisionCard extends Component
{
    public Amortization $data;

    public Company $company;

    public $total = 0;

    protected $listeners = ['refreshProvision'];

    public function mount($company)
    {
        $this->company = $company;
        $this->total = AccuredChargeCompany::whereType(AccuredChargeCompany::PERSONNAL_PROVISION)->whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
    }

    public function render()
    {
        return view('livewire.accured-charge.personnal-provision-card');
    }

    public function refreshProvision()
    {
        $this->total = AccuredChargeCompany::whereType(AccuredChargeCompany::PERSONNAL_PROVISION)->whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
    }
}
