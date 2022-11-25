<?php

namespace App\Http\Livewire\Cabinet\Users;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{

    public $users;

    public $listeners = ['getUserData'];

    public function mount()
    {
        $this->getUserData();
    }

    public function render()
    {
        return view('livewire.cabinet.users.user-table');
    }


    public function getUserData()
    {
        $this->users = User::where('user_id', request()->user()->id)->with('roles')->get();
    }
}
