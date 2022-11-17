<?php

namespace App\Http\Livewire;

use App\Models\AccuredChargeCompany;
use Livewire\Component;

class CreateProvisionsPersonnelExpenses extends Component
{
    public $company;

    public $provisionsPersonnelExpenses;

    public $inputs;

    public function addProvisionInput()
    {
        $this->inputs->push(['compte' => '', 'designation' => '', 'amount' => '', 'type' => 'personal-expense']);
    }


    public function removeInput($key)
    {
        $this->inputs->pull($key);
    }

    protected $rules = [
        'inputs.*.compte' => 'required|distinct|integer',
        'inputs.*.designation' => 'required',
        'inputs.*.amount' => 'required',
    ];

    protected $messages = [
        'inputs.*.compte.required' => 'champ obligatoire',
        'inputs.*.compte.integer' => 'Le champ doit etre un entier',
        'inputs.*.designation.required' => 'champ obligatoire',
        'inputs.*.amount.distinct' => 'incohérent',
        'inputs.*.designation.required' => 'champ obligatoire',
        'inputs.*.amount' => 'champ obligatoire',

    ];

    public function mount($company)
    {
        $this->company = $company;
        $provisionsPersonnelExpenses = [];
        $this->fill([
            'inputs' => collect($provisionsPersonnelExpenses),
        ]);
    }

    public function render()
    {
        return view('livewire.create-provisions-personnel-expenses');
    }

    public function submit()
    {
        $this->validate();
    }

    public function store()
    {
        $this->submit();
        foreach ($this->inputs as  $value) {
            AccuredChargeCompany::create([
                'compte' => $value['compte'],
                'designation' => $value['designation'],
                'type' => $value['type'],
                'amount' => $value['amount'],
                'company_id' => $this->company->id,
                'date' => date('Y'),
            ]);
        }

        return redirect()->route('tax-result.reintegration.accured-charge', $this->company->id);
    }
}
