<?php

namespace App\Http\Livewire\Company\Amortization;

use App\Fiscality\Companies\Company;
use App\Fiscality\Depreciations\Depreciation;
use App\Fiscality\Excesss\Excess;
use App\Fiscality\Vehicles\Vehicle;
use Livewire\Component;

class Details extends Component
{

    public ?Company $company;
    public $total = 0;

    protected $listeners = ['refreshTotal'];

    public function mount($company)
    {
        $this->refreshTotal();
        $this->company = $company;
    }

    public function render()
    {
        return view('livewire.company.amortization.details');
    }

    public function refreshTotal()
    {
        $vehicle = Vehicle::where('company_id', $this->company->id)->sum('deductible_amortization');
        $deductible_amortization = Excess::where('company_id', $this->company->id)->sum('deductible_amortization');
        $dotation = Depreciation::where('company_id', $this->company->id)->sum('dotation');

        $this->total = array_sum([$vehicle, $deductible_amortization, $dotation]);
    }
}
