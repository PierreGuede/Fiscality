<?php

namespace App\Http\Livewire;

use App\Fiscality\Companies\Company;
use Livewire\Component;

class TotalCard extends Component
{
    public $total;

    public Company $company;

    public function mount($total)
    {
        $this->total = $total;
    }

    public function render()
    {
        return view('livewire.total-card');
    }

    public function updatedTotal($value)
    {
        dump($value);
    }
}
