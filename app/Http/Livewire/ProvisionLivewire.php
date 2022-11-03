<?php

namespace App\Http\Livewire;

use App\Fiscality\AccuredCharges\AccuredCharge;
use Livewire\Component;

class ProvisionLivewire extends Component
{
    public $company;

    public $inputs;

    public function addProvisionInput()
    {
        $this->inputs->push(['account' => '', 'name' => '','amount' => '', 'type' => 'provision']);
    }
    public function removeInput($key)
    {
        $this->inputs->pull($key);
    }


    public function mount($company){
        $this->company=$company;
        $provision=AccuredCharge::where('type','provision')->get();
        $this->fill([
            'inputs' => collect($provision),
        ]);
    }


    public function render()
    {
        $provision=AccuredCharge::where('type','provision')->get();

        return view('livewire.provision-livewire',[
            'provision'=>$provision
        ]);
    }
    public function store(){
        // IncomeExpense::
    }

}
