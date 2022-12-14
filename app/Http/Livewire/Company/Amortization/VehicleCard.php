<?php

namespace App\Http\Livewire\Company\Amortization;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Fiscality\Vehicles\Vehicle;
use Livewire\Component;

class VehicleCard extends Component
{
    public Amortization $data;

    public $counter = 0;

    public Company $company;

    public $total_vehicle = 0;

    protected $listeners = ['newVehicle'];

    public function mount($company)
    {
        $this->company = $company;
        $this->total_vehicle = Vehicle::where('company_id', $this->company->id)->sum('deductible_amortization');
    }

    public function render()
    {
        return view('livewire.company.amortization.vehicle-card');
    }

    public function incrementCount()
    {
        $this->counter++;
    }

    public function newVehicle()
    {
        $this->total_vehicle = Vehicle::where('company_id', $this->company->id)->sum('deductible_amortization');
        $this->emit('refreshTotal');
    }
}
