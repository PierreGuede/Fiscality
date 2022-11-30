<?php

namespace App\Http\Livewire\Cabinet\Users;

use App\Fiscality\Companies\Company;
use App\Models\User;
use DB;
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
        $this->affected = DB::table('company_user')->where('user_id', $user->id)->get();
        foreach ($this->affected as $key => $value) {
            array_push($this->id_company, $value->id);
        }
        $this->user = $user;
        $this->companies = Company::whereUserId(auth()->user()->id)->join('company_user', 'companies.id', '=', 'company_user.company_id')->get();
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
