<?php

namespace App\Http\Livewire\Company\Amortization;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Fiscality\Excesss\Excess;
use Livewire\Component;

class ExcessCard extends Component
{
    public Amortization $data;

    public $counter = 0;

    public Company $company;

    public $total = 0;

    protected $listeners = ['newExcess'];

    public function mount($company)
    {
        $this->company = $company;
        $this->total = Excess::where('company_id', $this->company->id)->sum('deductible_amortization');
    }

    public function render()
    {
        return view('livewire.company.amortization.excess-card');
    }

    public function incrementCount()
    {
        $this->counter++;
    }

    public function newExcess()
    {
        $this->total = Excess::where('company_id', $this->company->id)->sum('deductible_amortization');
    }
}
