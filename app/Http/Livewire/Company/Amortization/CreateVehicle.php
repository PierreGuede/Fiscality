<?php

namespace App\Http\Livewire\Company\Amortization;

use LivewireUI\Modal\ModalComponent;

class CreateVehicle extends ModalComponent
{
    public function render()
    {
        return view('livewire.company.amortization.create-vehicle');
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function store()
    {
        $this->closeModal();
    }
}
