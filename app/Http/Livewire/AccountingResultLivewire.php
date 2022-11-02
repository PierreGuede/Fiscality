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


    public $income_data = [];
    public $income = [];
    public $expense = [];




    public  $inputs;

    public function addIncomeInput()
    {
        $this->inputs->push(['account' => '', 'name' => '','amount' => '', 'type' => 'income']);
    }

    public function addExpenseInput()
    {
        $this->inputs->push(['account' => '', 'name' => '', 'amount' => '',  'type' => 'expense']);
    }


    public function removeInput($key)
    {
        $this->inputs->pull($key);
    }

    protected $rules = [
        'inputs.*.account' => 'required|distinct|integer',
        'inputs.*.name' => 'required',
        'inputs.*.amount' => 'required'
    ];

    protected $messages = [
        'inputs.*.account.required' => 'champ obligatoire',
        'inputs.*.name.required' => 'champ obligatoire',
        'inputs.*.amount' => 'champ obligatoire'

    ];

    public function submit()
    {
        $this->validate();
    }

    public function mount($company)
    {
        $income=IncomeExpense::where('type','income')->get();
        $this->currentStep=1;
        $this->company = $company;
        $this->fill([
            'inputs' => collect($income),
        ]);
    }

    public function render()
    {
        $income=IncomeExpense::where('type','income')->get();
        $this->expense=IncomeExpense::where('type','expense')->get();

        return view('livewire.accounting-result-livewire',[
            'company' => $this->company,
            'incomes'=>$income,
            'expenses'=>$this->expense,
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
        $validated = $this->validate();

        if($this->calculIncome == 1) {
            $this->income_data = $this->inputs;
        }

        $this->calculIncome++;
        if($this->calculIncome == 2) {
            $this->income_data = $this->inputs;
            $this->inputs = collect($this->expense);
        }

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

    public function store(){
        // IncomeExpense::
    }
}
