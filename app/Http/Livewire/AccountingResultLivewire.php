<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Fiscality\IncomeExpenses\IncomeExpense;

class AccountingResultLivewire extends Component
{
    public $company;
    public $calculIncome;
    public $totalSteps=4;
    public $currentStep=1;
    public function mount($company)
    {
        $this->currentStep=1;
        $this->company = $company;
    }
    public function render()
    {
        $income=IncomeExpense::where('type','income')->get();
        $expense=IncomeExpense::where('type','expense')->get();
        return view('livewire.accounting-result-livewire',[
            'company' => $this->company,
            'income'=>$income,
            'expense'=>$expense,
        ]);
    }
    public function determinateAccount(){
        $this->currentStep=2;
        $this->calculIncome=1;
    }
    public function determinateManualAccount(){
        $this->currentStep=3;
    }
    public function increaseStep(){
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }
    public function decreaseStep(){
        $this->resetErrorBag();

        $this->currentStep--;
        if ( $this->currentStep < 1 ) {
            $this->currentStep = 1;
        }
    }

    public function increateIncome(){
        $this->calculIncome++;
        if ( $this->calculIncome > 3 ) {
            $this->calculIncome = 3;
        }
    }

    public function decreateIncome(){
        $this->calculIncome=1;
    }
    public function returnBack(){
        $this->currentStep=1;
    }
    public function validateData(){

    }
}
