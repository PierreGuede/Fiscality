<?php

namespace App\Http\Livewire\CorporateTax;

use App\Fiscality\Companies\Company;
use App\Models\MinimumTax;
use Carbon\Carbon;
use Livewire\Component;

class MinimumTaxCard extends Component
{
    public Company $company;

    public $total = 0;

    public $listeners = ['updateMinimumTax'];

    public function mount($company)
    {
        $this->updateMinimumTax();
        $this->company = $company;
    }

    public function render()
    {
        return view('livewire.corporate-tax.minimum-tax-card');
    }

    public function updateMinimumTax()
    {
        $data = MinimumTax::whereCompanyId($this->company->id)->whereYear('created_at', Carbon::now()->year)->first();
        $this->total = $data ? $data->total : 0;
    }
}
