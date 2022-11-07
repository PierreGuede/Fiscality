<?php

namespace App\Http\Livewire\OtherReintegration;

use Livewire\Component;

class CreateCommissionOnPurchases extends Component
{

    public bool  $open_a_side = true;
    public string  $response = 'no';

    public $inputs;

    public function add(): void
    {
        $this->inputs->push(['account' => '', 'name' => '', 'amount' => '', 'type' => 'income']);
    }

    public function removeInput($key): void
    {
        $this->inputs->pull($key);
    }

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

    protected $listeners = ['openASide', 'closeASide'];

    public function render()
    {
        return view('livewire.other-reintegration.create-commission-on-purchases');
    }

    public function openASide() {
        $this->open_a_side = true;
    }

    public function closeASide() {
        $this->open_a_side = false;
    }
}
