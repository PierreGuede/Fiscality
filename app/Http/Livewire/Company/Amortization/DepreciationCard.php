<?php

namespace App\Http\Livewire\Company\Amortization;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Fiscality\Depreciations\Depreciation;
use Livewire\Component;

class DepreciationCard extends Component
{
    public Amortization $data;

    public $counter = 0;

    public Company $company;

    public $total = 0;

    protected $listeners = ['newDepreciation'];

    public function mount($company)
    {
        $this->company = $company;
        $this->total = Depreciation::where('company_id', $this->company->id)->sum('dotation');
    }

    public function render()
    {
        return view('livewire.company.amortization.depreciation-card');
    }

    public function newDepreciation()
    {
        $this->total = Depreciation::where('company_id', $this->company->id)->sum('dotation');
        $this->emit('refreshTotal');
    }
}
