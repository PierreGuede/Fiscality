<?php

namespace App\Http\Livewire\OtherReintegration;

use Livewire\Component;

class CreateFinancialCost extends Component
{
    public bool  $open_a_side = false;

    public string  $response = 'no';

    protected $listeners = ['openASide', 'closeASide'];

    public function render()
    {
        return view('livewire.other-reintegration.create-financial-cost');
    }

    public function openASide()
    {
        $this->open_a_side = true;
    }

    public function closeASide()
    {
        $this->open_a_side = false;
    }

    public function store()
    {
    }
}
