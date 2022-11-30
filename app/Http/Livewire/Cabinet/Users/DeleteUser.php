<?php

namespace App\Http\Livewire\Cabinet\Users;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class DeleteUser extends ModalComponent
{
    public User $user;

    public function mount(User $user)
    {
    }

    public function render()
    {
        return view('livewire.cabinet.users.delete-user');
    }

    public function delete()
    {
        $this->user->delete();

        $this->closeModal();
    }
}
