<?php

namespace App\Http\Livewire\Cabinet\Users;

use App\Fiscality\Companies\Company;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class AssignCompany extends ModalComponent
{
    public User $user;

    public $companies;

    public $affected;

    public $id_company = [];

    public $assign_companies;

    public string $name = '';

    public string $firstname = '';

    public string $email = '';

    public function mount(User $user)
    {
        $this->user = $user;
//        dump($user->getWorkspaceCompany);
        $this->companies = Company::whereUserId(auth()->user()->id)->get();

        $this->fill([
            'name' => $user->name,
            'firstname' => $user->firstname,
            'email' => $user->email,
        ]);
    }

    public function render()
    {
        return view('livewire.cabinet.users.assign-company');
    }

    public function save()
    {
        $this->user->personnel()->attach($this->assign_companies);

        $this->closeModal();
    }
}
