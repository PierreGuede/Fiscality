<?php

namespace App\Http\Livewire\Cabinet\Users;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use LivewireUI\Modal\ModalComponent;

class EditUser extends ModalComponent
{
    public User $user;

    public string $name = '';

    public string $firstname = '';

    public string $email = '';

    public function mount(User $user)
    {
        $this->user = $user;
        $this->fill([
            'name' => $user->name,
            'firstname' => $user->firstname,
            'email' => $user->email,
        ]);
    }

    public function render()
    {
        return view('livewire.cabinet.users.edit-user');
    }

    public function save()
    {
        Validator::make([
            'name' => $this->name,
            'firstname' => $this->firstname,
            'email' => $this->email,
        ], [
            'name' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ], [
            'name.required' => 'champ obligatoire',
            'firstname.required' => 'champ obligatoire',
            'email.required' => 'champ obligatoire',
        ]);

        $this->user->name = $this->name;
        $this->user->email = $this->email;
        $this->user->firstname = $this->firstname;

        $this->user->save();

        $this->emit('getUserData');

        $this->closeModal();
    }
}
