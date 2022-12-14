<?php

namespace App\Http\Livewire\CorporateTax;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Fiscality\Vehicles\Vehicle;
use LivewireUI\Modal\ModalComponent;

class CreateRealTax extends ModalComponent
{
    public Amortization $model;

    public $company;

    public $data = [
        'name' => '',
        'value' => 0,
        'plafond' => 25000000,
        'dotation' => '',
        'date' => '',
    ];

    protected $rules = [
        'data.name' => 'required|string',
        'data.value' => 'required|integer',
        'data.plafond' => 'required|integer',
        'data.dotation' => 'required|integer',
        'data.date' => 'required|date|before_or_equal:today',
    ];

    protected $messages = [
        'data.name.required' => 'champ obligatoire',
        'data.account.distinct' => 'incohérent',
        'data.name.required' => 'champ obligatoire',
        'data.amount' => 'champ obligatoire',
        'data.date.before_or_equal' => 'doit etre inférieur a la date actuelle',
        'data.date.required' => 'champ requis',
        'data.date.date' => 'le champs dois être une date',

    ];

    public function mount(Company $company)
    {
        $this->company = $company;
    }

    public function render()
    {
        return view('livewire.corporate-tax.create-real-tax');
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function save()
    {
        $this->validate();

        $armortization = Amortization::create([]);
        try {
            $ecart = $this->data['value'] - $this->data['plafond'];
            $deductibleAmortization = ((float) $this->data['dotation'] * (float) $ecart) / (float) $this->data['value'];
            Vehicle::create([
                'name' => $this->data['name'],
                'value' => $this->data['value'],
                'plafond' => $this->data['plafond'],
                'ecart' => $ecart,
                'dotation' => $this->data['dotation'],
                'deductible_amortization' => $deductibleAmortization,
                'date' => $this->data['date'],
                'amortization_id' => $armortization->id,
                'company_id' => $this->company->id,
            ]);

            $this->emit('newVehicle');

            $this->closeModal();
        } catch (\Throwable $th) {
            notify()->error('Une erreur est survenue');
            throw $th;
        }
    }
}
