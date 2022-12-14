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
        'inputs.*.compte' => 'required|distinct|integer',
        'inputs.*.designation' => 'required',
        'inputs.*.amount' => 'required',
    ];

    protected $messages = [
        'inputs.*.compte.required' => 'champ obligatoire',
        'inputs.*.compte.distinct' => 'incohérent',
        'inputs.*.designation.required' => 'champ obligatoire',
        'inputs.*.amount' => 'champ obligatoire',

    ];

    public function add()
    {
        $this->inputs->push(['compte' => '', 'designation' => '', 'amount' => '', 'type' => AccuredChargeCompany::PERSONNAL_PROVISION]);
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

            foreach ($this->inputs as  $value) {
                AccuredChargeCompany::create([
                    'compte' => $value['compte'],
                    'designation' => $value['designation'],
                    'type' => AccuredChargeCompany::PERSONNAL_PROVISION,
                    'amount' => $value['amount'],
                    'company_id' => $this->company['id'],
                    'date' => date('Y'),
                ]);
            }

            DB::commit();
            $this->emit('refreshProvision');
            $this->emit('refreshTotalCard');
            return redirect(request()->header('Referer'));
//            $this->closeModal();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
