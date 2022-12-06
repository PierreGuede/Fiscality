<?php

namespace App\Http\Livewire\Company\Amortization;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class DeleteVehicleHandler extends ModalComponent
{
    use Actions;

    public $vehicle;

    public function mount($vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function render()
    {
        return view('livewire.company.amortization.delete-vehicle-handler');
    }

    public function delete()
    {
         \App\Fiscality\Vehicles\Vehicle::destroy($this->vehicle);

        return redirect(request()->header('Referer'));
    }
}
