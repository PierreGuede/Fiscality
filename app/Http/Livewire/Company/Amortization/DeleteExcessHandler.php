<?php

namespace App\Http\Livewire\Company\Amortization;

use App\Fiscality\Excesss\Excess;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class DeleteExcessHandler extends ModalComponent
{
    use Actions;

    public $amortization_excess;

    public function mount($amortization_excess)
    {
        $this->amortization_excess = $amortization_excess;
    }

    public function render()
    {
        return view('livewire.company.amortization.delete-excess-handler');
    }

    public function delete()
    {
        Excess::destroy($this->amortization_excess);

        return redirect(request()->header('Referer'));
    }
}
