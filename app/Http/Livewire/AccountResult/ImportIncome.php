<?php

namespace App\Http\Livewire\AccountResult;

use App\Imports\IncomeExpenseImport;
use App\Imports\RADetailImport;
use Livewire\Component;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class ImportIncome extends ModalComponent
{
    use WithFileUploads ,Actions;

    public $file;

    protected $rules = [
        'file'=> ['required']
    ];

    public function render()
    {
        return view('livewire.account-result.import-income');
    }

    public function save() {
        $this->validate();

        \Maatwebsite\Excel\Facades\Excel::import(new RADetailImport, $this->file);
//        $raDetails =
//        (new RADetailImport)->import($this->file, null, \Maatwebsite\Excel\Excel::XML);

        $this->notification()->success('Succès', 'Importation effectuée avec succès!');
        $this->emit('refreshIncome');


        $this->closeModal();

    }
}
