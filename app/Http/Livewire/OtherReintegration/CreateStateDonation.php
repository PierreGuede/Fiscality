<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\Companies\Company;
use App\Fiscality\GeneralCosts\GeneralCost;
use App\Fiscality\IncomeExpenses\IncomeExpense;
use Livewire\Component;

class CreateStateDonation extends Component
{

    public bool  $open_a_side = false;
    public string  $response = 'no';
    public $company;
    public  $general_cost;

    public $first_inputs;
    public $second_inputs;

    protected $listeners = ['openASide', 'closeASide'];

    protected $rules = [
        'first_inputs.*.account' => 'required|distinct|integer',
        'first_inputs.*.name' => 'required',
        'first_inputs.*.amount' => 'required',
    ];

    protected $messages = [
        'first_inputs.*.account.required' => 'champ obligatoire',
        'first_inputs.*.account.distinct' => 'incohérent',
        'first_inputs.*.name.required' => 'champ obligatoire',
        'first_inputs.*.amount' => 'champ obligatoire',

    ];

    public function addToFirstInput(): void
    {
        $this->first_inputs->push(['account' => '', 'name' => '', 'amount' => '', 'type' => 'income']);
    }

    public function removeFromFirstInput($key): void
    {
        $this->first_inputs->pull($key);
    }


    public function addToSecondInput(): void
    {
        $this->second_inputs->push(['account' => '', 'name' => '', 'amount' => '', 'type' => 'income']);
    }

    public function removeFromSecondInput($key): void
    {
        $this->second_inputs->pull($key);
    }


    public function mount(Company $company) {

        $this->general_cost = GeneralCost::whereCompanyId($company->id)->get();
        $this->company = $company;
        $this->fill([
            'first_inputs' => collect($this->general_cost),
            'second_inputs' => collect($this->general_cost),
        ]);
    }

    public function render()
    {

        $this->commission_on_purchase = [];
        return view('livewire.other-reintegration.create-state-donation');
    }

    public function openASide() {
        $this->open_a_side = true;
    }

    public function closeASide() {
        $this->open_a_side = false;
    }
}
