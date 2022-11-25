<?php

namespace App\Http\Livewire\Cabinet\Users;

use App\Fiscality\Companies\Company;
use App\Fiscality\CompanyAccesControl\Repositories\CompanyAccesControlRepository;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Validation\Rules;


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
        ],[
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
