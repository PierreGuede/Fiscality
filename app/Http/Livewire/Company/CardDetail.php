<?php

namespace App\Http\Livewire\Company;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Fiscality\Vehicles\Vehicle;
use Livewire\Component;

class CardDetail extends Component
{
    public Amortization $data;

    public $counter = 0;

    public Company $company;

    public $total_vehicle = 0;

    protected $listeners = ['incrementCount'];

    public function mount($company)
    {
        $this->company = $company;
        $this->total_vehicle = Vehicle::where('company_id', $this->company->id)->sum('deductible_amortization');
    }

    public function render()
    {
        return view('livewire.company.card-detail');
    }

    public function incrementCount()
    {
        $this->counter++;
    }

    public function newVehicle()
    {
        $this->total_vehicle = Vehicle::where('company_id', $this->company->id)->sum('deductible_amortization');
    }
}
