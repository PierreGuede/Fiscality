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

    public bool $can_add = true;

    public $total = 0;

    protected $listeners = ['refreshProvision'];

    public function mount($company)
    {
        $this->company = $company;
        $data = AccuredChargeCompany::whereType(AccuredChargeCompany::PERSONNAL_PROVISION)->whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->get();
        $this->can_add = count($data)> 0;

        $this->total =  array_sum(array_column($data->toArray(),'amount'));

    }

    public function render()
    {
        return view('livewire.accured-charge.personnal-provision-card');
    }

    public function refreshProvision()
    {
        $data = AccuredChargeCompany::whereType(AccuredChargeCompany::PERSONNAL_PROVISION)->whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->get();
        $this->total =  array_sum(array_column($data->toArray(),'amount'));
    }
}
