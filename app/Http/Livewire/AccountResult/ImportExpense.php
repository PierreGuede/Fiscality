<?php

namespace App\Http\Livewire\AccountResult;

use App\Imports\RADetailImport;
use Livewire\Component;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;



class ImportExpense extends ModalComponent
{
    use WithFileUploads ,Actions;

    public $file;

   protected $rules = [
       'file'=> ['required']
   ];

    public function render()
    {
        return view('livewire.account-result.import-expense');
    }

    public function save() {
        $this->validate();

        \Maatwebsite\Excel\Facades\Excel::import(new RADetailImport, $this->file);

        $this->notification()->success('Succès', 'Importation effectuée avec succès!');
        $this->emit('refreshExpense');
        $this->closeModal();

    }
}
