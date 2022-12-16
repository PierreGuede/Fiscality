<?php

namespace App\Http\Livewire\AccountResult;

use App\Imports\RADetailImport;
use Livewire\Component;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class ImportIncome extends ModalComponent
{
    use WithFileUploads ,Actions;

    public $file;

    public function render()
    {
        return view('livewire.account-result.import-income');
    }

    public function save() {

        \Maatwebsite\Excel\Facades\Excel::import(new RADetailImport, $this->file);

        $this->notification()->success('Succès', 'Importation effectuée avec succès!');
        $this->closeModal();

    }
}