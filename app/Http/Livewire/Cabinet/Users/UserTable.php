<?php

namespace App\Http\Livewire\Cabinet\Users;

use App\Mail\SendUserCredential;
use App\Models\User;
use Livewire\Component;
use WireUi\Traits\Actions;

class UserTable extends Component
{
    use Actions;

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

    public function resendConfirmationMail($user_id)
    {
        try {

        $password = User::generatePassword(User::PASSWORD_LENGTH);
        $user = User::whereId($user_id)->first();
        $user->password = \Hash::make($password);
        $user->save();
        $user->assignRole(User::DEFAULT_ROLE);

        \Mail::to($user->email)->send(new SendUserCredential($user->name, $user->username, $user->email, $password));

        $this->notification()->success(
            $title = 'Succès',
            $description = 'Email renvoyé avec succès!'
        );
        } catch (\Throwable $th) {
            $this->notification()->success(
                $title = 'Erreur',
                $description = 'Une erreur est survenue lors du renvoie du mail'
            );
            return $th;
        }

    }
}
