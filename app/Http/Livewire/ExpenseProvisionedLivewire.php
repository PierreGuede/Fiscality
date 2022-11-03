<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Fiscality\AccuredCharges\AccuredCharge;
use App\Models\AccuredChargeCompany;

class ExpenseProvisionedLivewire extends Component
{
    public $company;

    public $inputs;

    public function addProvisionInput()
    {
        $this->inputs->push(['compte' => '', 'designation' => '','amount' => '', 'type' => 'charges']);
    }
    public function removeInput($key)
    {
        $this->inputs->pull($key);
    }


    public function mount($company){
        $this->company=$company;
        $charges=AccuredCharge::where('type','charges')->get();
        $this->fill([
            'inputs' => collect($charges),
        ]);
    }


    public function render()
    {
        $charges=AccuredCharge::where('type','charges')->get();

        return view('livewire.expense-provisioned-livewire',[
            'charges'=>$charges
        ]);
    }

    public function store(){
        dd($this->inputs);
        foreach ($this->inputs as  $value) {
            AccuredChargeCompany::create([
                'compte'=>$value['compte'],
                'designation'=>$value['designation'],
                'type'=>$value['type'],
                'amount'=>$value['amount'],
                'company_id'=>$this->company->id,
                'date'=>date('Y-m-d'),
            ]);
        }
    }

}
