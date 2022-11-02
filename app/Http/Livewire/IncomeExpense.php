<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IncomeExpense extends Component
{
    public $income_expense;

    public $account;

    public $name;

    public $income_expense_id;

    private $income_form_data = [];

    private $expense_form_data = [];

    public $updateMode = false;

    public $inputs = [];

    public $i = 1;

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        $this->income_expense = \App\Fiscality\IncomeExpenses\IncomeExpense::all();

        return view('livewire.income-expense');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    private function resetInputFields()
    {
        $this->account = '';
        $this->name = '';
    }

    /**
     * @return response()
     */
    public function goToExpense()
    {
        $validatedDate = $this->validate([
            'account.0' => 'required',
            'name.0' => 'required',
            'account.*' => 'required',
            'name.*' => 'required',
        ],
            [
                'account.0.required' => 'account field is required',
                'name.0.required' => 'name field is required',
                'account.*.required' => 'account field is required',
                'name.*.required' => 'name field is required',
            ]
        );

        $this->income_form_data = $this->inputs;

        $this->inputs = [];

        $this->resetInputFields();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store()
    {
        $validatedDate = $this->validate([
            'account.0' => 'required',
            'name.0' => 'required',
            'account.*' => 'required',
            'name.*' => 'required',
        ],
            [
                'account.0.required' => 'account field is required',
                'name.0.required' => 'name field is required',
                'account.*.required' => 'account field is required',
                'name.*.required' => 'name field is required',
            ]
        );

        foreach ($this->account as $key => $value) {
            \App\Fiscality\IncomeExpenses\IncomeExpense::create(['account' => $this->account[$key], 'name' => $this->name[$key]]);
        }

        $this->inputs = [];

        $this->resetInputFields();

        session()->flash('message', 'Compte créer avec succès');
    }
}
