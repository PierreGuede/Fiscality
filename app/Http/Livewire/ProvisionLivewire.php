<?php

namespace App\Http\Livewire;

use App\Fiscality\AccuredCharges\AccuredCharge;
use App\Models\AccuredChargeCompany;
use LivewireUI\Modal\ModalComponent;

class ProvisionLivewire extends ModalComponent
{
    public $company;

    public $inputs;

    public function addProvisionInput()
    {
        $this->inputs->push(['compte' => '', 'designation' => '', 'amount' => '', 'type' => AccuredChargeCompany::PROVISION]);
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

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function mount($company)
    {
        $this->company = $company;
        $provision = AccuredCharge::where('type', 'provision')->get();
        $this->fill([
            'inputs' => collect($provision),
        ]);
    }

    public function render()
    {
        $provision = AccuredCharge::where('type', 'provision')->get();

        return view('livewire.provision-livewire', [
            'provision' => $provision,
        ]);
    }

    public function submit()
    {
        $this->validate();
    }

    public function store()
    {
        // dd($this->company['id']);
        $this->submit();
        foreach ($this->inputs as  $value) {
            AccuredChargeCompany::create([
                'compte' => $value['compte'],
                'designation' => $value['designation'],
                'type' => $value['type'],
                'amount' => $value['amount'],
                'company_id' => $this->company['id'],
                'date' => date('Y'),
            ]);
        }
        $this->emit('refreshProvision');
        $this->emit('refreshTotalCard');

        $this->closeModal();

        return redirect()->route('tax-result.reintegration.accured-charge', $this->company['id']);
    }
}
