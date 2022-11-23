<?php

namespace App\Http\Livewire\Cabinet;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CreateRole extends ModalComponent
{
    public function render()
    {
        return view('livewire.cabinet.create-role');
    }
}
