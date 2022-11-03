<?php

namespace App\Http\Livewire\Company\Amortization;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Fiscality\Vehicles\Vehicle;
use LivewireUI\Modal\ModalComponent;

class CreateVehicle extends ModalComponent
{
    public Amortization $model;

    public Vehicle $amortisation;

    public $company;

    public $data = [
        'name' => '',
        'value' => 0,
        'plafond' => 25000000,
        'dotation' => '',
        'date' => '',
    ];

    public function mount(Company $company)
    {
        $this->company = $company;
    }

    public function render()
    {
        return view('livewire.company.amortization.create-vehicle');
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function save()
    {
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

            $this->emitTo('card-detail', 'incrementCount');
            notify()->success('Test notification');

            $this->closeModal();
        } catch (\Throwable $th) {
            notify()->error("Une erreur est survenue");
            throw $th;
        }
    }
}
