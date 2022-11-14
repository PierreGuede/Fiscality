<?php

namespace App\Http\Livewire\Company\Amortization;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use App\Fiscality\Vehicles\Vehicle;
use Carbon\Carbon;
use LivewireUI\Modal\ModalComponent;

class EditVehicle extends ModalComponent
{
    public Amortization $model;

    public $company;
    public Vehicle $vehicle;

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
        $this->vehicle = Vehicle::whereCompanyId($company->id)->whereYear('created_at',Carbon::now()->year)->first();

        $this->data['name'] = $this->vehicle->name;
        $this->data['value'] = $this->vehicle->value;
        $this->data['plafond'] = $this->vehicle->plafond;
        $this->data['dotation'] = $this->vehicle->dotation;
        $this->data['date'] = $this->vehicle->date;

    }

    public function render()
    {
        return view('livewire.company.amortization.edit-vehicle');
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function save()
    {
//        $armortization = Amortization::whereCompanyId($this->company->id)->whereYear('created_at',Carbon::now()->year)->first();
        try {
            $ecart = $this->data['value'] - $this->data['plafond'];
            $deductibleAmortization = ((float) $this->data['dotation'] * (float) $ecart) / (float) $this->data['value'];

            $this->vehicle->fill([
                'name' => $this->data['name'],
                'value' => $this->data['value'],
                'plafond' => $this->data['plafond'],
                'ecart' => $ecart,
                'dotation' => $this->data['dotation'],
                'deductible_amortization' => $deductibleAmortization,
                'date' => $this->data['date'],
            ]);

            $this->vehicle->save();

            $this->emit('newVehicle');

            $this->closeModal();
        } catch (\Throwable $th) {
            notify()->error('Une erreur est survenue');
            throw $th;
        }
    }
}
