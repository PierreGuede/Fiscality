<?php

namespace App\Http\Livewire;

use App\Fiscality\Companies\Company;
use Livewire\Component;

class CreateGeneralCost extends Component
{
    public bool  $open_a_side = false;

    public string  $response = 'no';

    public $general_cost;

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

    public function mount(Company $company)
    {
        $this->general_cost = GeneralCost::whereCompanyId($company->id)->get();
        $this->currentStep = 1;
        $this->company = $company;
        $this->fill([
            'inputs' => collect($this->general_cost),
        ]);
    }

    public function render()
    {
        return view('livewire.create-general-cost');
    }

    public function openASide()
    {
        $this->open_a_side = true;
    }

    public function closeASide()
    {
        $this->open_a_side = false;
    }
}
