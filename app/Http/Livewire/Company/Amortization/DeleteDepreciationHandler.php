<?php

namespace App\Http\Livewire\Company\Amortization;

use App\Fiscality\Depreciations\Depreciation;
use App\Fiscality\Excesss\Excess;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class DeleteDepreciationHandler extends ModalComponent
{
    use Actions;

    public $depreciation;

    public function mount($depreciation)
    {
        $this->depreciation = $depreciation;
    }

    public function render()
    {
        return view('livewire.company.amortization.delete-depreciation-handler');
    }

    public function delete()
    {
        Depreciation::destroy($this->depreciation);


        return redirect(request()->header('Referer'));
    }
}
