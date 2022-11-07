<?php

namespace App\Http\Livewire\OtherReintegration;

use App\Fiscality\Companies\Company;
use App\Fiscality\IncomeExpenses\IncomeExpense;
use Livewire\Component;

class CreateRedevance extends Component
{

    public bool  $open_a_side = false;
    public string  $response = 'no';
    public $commission_on_purchase ;

    public $inputs;

    protected $listeners = ['openASide', 'closeASide'];

    protected $rules = [
        'inputs.*.account' => 'required|distinct|integer',
        'inputs.*.name' => 'required',
        'inputs.*.amount' => 'required',
    ];

    protected $messages = [
        'inputs.*.account.required' => 'champ obligatoire',
        'inputs.*.account.distinct' => 'incohérent',
        'inputs.*.name.required' => 'champ obligatoire',
        'inputs.*.amount' => 'champ obligatoire',

    ];

    public function add(): void
    {
        $this->inputs->push(['account' => '', 'name' => '', 'amount' => '', 'type' => 'income']);
    }

    public function remove($key): void
    {
        $this->inputs->pull($key);
    }


    public function mount(Company $company) {

        $this->commission_on_purchase = [];
        $this->currentStep = 1;
        $this->company = $company;
        $this->fill([
            'inputs' => collect($this->commission_on_purchase),
        ]);
    }

    public function render()
    {

        $this->commission_on_purchase = [];
        return view('livewire.other-reintegration.create-redevance');
    }

    public function openASide() {
        $this->open_a_side = true;
    }

    public function closeASide() {
        $this->open_a_side = false;
    }
}
