<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TaxRatesSetting extends Component
{
    public $company;

    public function mount($company)
    {
        $this->company = $company;
    }

    public function render()
    {
        return view('livewire.tax-rates-setting');
    }
}
