<?php

namespace App\Http\Livewire\Company\Amortization;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Fiscality\Excesss\Excess;
use App\Fiscality\Vehicles\Vehicle;
use LivewireUI\Modal\ModalComponent;

class CreateExcess extends ModalComponent
{
    public Amortization $model;

    public Vehicle $amortisation;

    public $company;

    public $data = [
        'category_imo' => '',
        'designation' => '',
        'taux_use' => 0,
        'taux_recommended' => 0,
        'dotation' => 0,
        //        'ecart' => 0,
        //        'deductible_amortization' => 0,
    ];

    public $rules = [
        'data.category_imo' => 'required|min:1',
        'data.designation' => 'required|min:1',
        'data.dotation' => 'required|numeric|min:1',
        'data.taux_use' => 'required|numeric|between:0.01,100',
        'data.taux_recommended' => 'required|numeric|between:0.1,100',
    ];

    public $messages = [
        'data.category_imo.required' => 'champ obligatoire',
        'data.designation.required' => 'champ obligatoire',
        'data.dotation.required' => 'champ obligatoire',
        'data.taux_use.required' => 'champ obligatoire',
        'data.taux_use.numeric' => 'invalid',
        'data.taux_use.between' => 'invalid',
        'data.taux_recommended.required' => 'champ obligatoire',
        'data.taux_recommended.numeric' => 'invalid',
        'data.taux_recommended.between' => 'invalid',

    ];

    public function mount(Company $company)
    {
        $this->company = $company;
    }

    public function render()
    {
        return view('livewire.company.amortization.create-excess');
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function save()
    {
        $this->validate();

        $armortization = Amortization::create([]);
        $ecart = (float) $this->data['taux_use'] - (float) $this->data['taux_recommended'];
        $deductibleAmortization = ((float) $this->data['dotation'] * (float) $ecart) / (float) $this->data['taux_use'];
        Excess::create([
            'category_imo' => $this->data['category_imo'],
            'designation' => $this->data['designation'],
            'taux_use' => $this->data['taux_use'],
            'taux_recommended' => $this->data['taux_recommended'],
            'ecart' => $ecart,
            'dotation' => $this->data['dotation'],
            'deductible_amortization' => $deductibleAmortization,
            'amortization_id' => $armortization->id,
            'company_id' => $this->company->id,
        ]);

        $this->emit('newExcess');

        $this->closeModal();
    }
}
