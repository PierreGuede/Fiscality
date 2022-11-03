<?php

namespace App\Http\Livewire\Company\Amortization;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Fiscality\Depreciations\Depreciation;
use App\Fiscality\Vehicles\Vehicle;
use Livewire\Component;

class DepreciationCard extends Component
{
    public Amortization $data ;
    public $counter = 0;

    public Company $company;
    public $total_vehicle = 0;
    protected $listeners = [ 'incrementCount' ];


    public function mount($company)
    {
        $this->company = $company;
        $this->total_vehicle = Depreciation::where('company_id', $this->company->id)->sum('dotation');
    }

    public function render()
    {

        return view('livewire.company.amortization.depreciation-card');
    }

    public function incrementCount() {
        $this->counter++;
    }

    public function newDepreciation() {
        $this->total_vehicle = Depreciation::where('company_id', $this->company->id)->sum('deductible_amortization');
    }
}
