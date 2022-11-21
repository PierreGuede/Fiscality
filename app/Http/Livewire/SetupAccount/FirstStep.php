<?php

namespace App\Http\Livewire\SetupAccount;

use App\Fiscality\Packs\Pack;
use Livewire\Component;

class FirstStep extends Component
{
    public $cabinet_data;

    public $company_data;

    public function mount()
    {
        $this->cabinet_data = Pack::whereType('cabinet')->get();
        $this->company_data = Pack::whereType('enterprise')->get();
    }

    public function render()
    {
        return view('livewire.setup-account.first-step');
    }
}
