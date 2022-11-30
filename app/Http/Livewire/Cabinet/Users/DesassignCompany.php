<?php

namespace App\Http\Livewire\Cabinet\Users;

use App\Fiscality\Companies\Company;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class DesassignCompany extends ModalComponent
{
    public User $user;

    public $companies;

    public $assign_companies;

    public string $name = '';

    public string $firstname = '';

    public string $email = '';

    public function mount(User $user)
    {
        $this->user = $user;
        $this->companies = Company::whereUserId(auth()->user()->id)->get();
        $this->fill([
            'name' => $user->name,
            'firstname' => $user->firstname,
            'email' => $user->email,
        ]);
    }

    public function render()
    {
        return view('livewire.cabinet.users.desassign-company');
    }

    public function save()
    {
        foreach ($this->assign_companies as $key => $value) {
            $this->user->personnel()->detach($value);
        }

        $this->closeModal();
    }
}
