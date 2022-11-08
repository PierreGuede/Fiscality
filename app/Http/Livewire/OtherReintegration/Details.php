<?php

namespace App\Http\Livewire\OtherReintegration;

use Livewire\Component;

class Details extends Component
{
    public $company;

    public function mount($company)
    {
        $this->company = $company;
    }

    public function render()
    {
        return view('livewire.other-reintegration.details');
    }
}
