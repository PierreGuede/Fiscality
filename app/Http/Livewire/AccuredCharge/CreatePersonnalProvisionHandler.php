<?php

namespace App\Http\Livewire\AccuredCharge;

use App\Fiscality\Companies\Company;
use App\Models\AccuredChargeCompany;
use Illuminate\Support\Facades\DB;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class CreatePersonnalProvisionHandler extends ModalComponent
{
    use Actions;

    public ?Company $company;

    public $data;

    public $inputs;

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

    public function add()
    {
        $this->inputs->push(['account' => '', 'name' => '', 'amount' => '', 'type' => AccuredChargeCompany::PERSONNAL_PROVISION]);
    }

    public function remove($key)
    {
        $this->inputs->pull($key);
    }

    public function mount(Company $company)
    {
        $this->company = $company;

        $this->data = [];

        $this->fill([
            'inputs' => collect($this->data),
        ]);
    }

    public function render()
    {
        return view('livewire.accured-charge.create-personnal-provision-handler');
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function save()
    {
        $this->validate();

        try {
            DB::beginTransaction();

            DB::commit();
            $this->closeModal();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
