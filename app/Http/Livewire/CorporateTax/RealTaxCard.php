<?php

namespace App\Http\Livewire\CorporateTax;

use Livewire\Component;

class RealTaxCard extends Component
{
    public $total = 0;

    public function mount($total)
    {
        $this->total = $total;
    }

    public function render()
    {
        return view('livewire.corporate-tax.real-tax-card');
    }
}
