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


class AssignCompany extends ModalComponent
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
        return view('livewire.cabinet.users.assign-company');
    }

    public function save()
    {

        $this->user->personnel()->sync($this->assign_companies);

        $this->closeModal();

    }

}
