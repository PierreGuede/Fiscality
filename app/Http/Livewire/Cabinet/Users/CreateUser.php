<?php

namespace App\Http\Livewire\Cabinet\Users;

use App\Fiscality\Companies\Company;
use App\Mail\SendUserCredential;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use LivewireUI\Modal\ModalComponent;

class CreateUser extends ModalComponent
{
    public const USER_CODE_LENGTH = 8;

    public const PASSWORD_LENGTH = 10;

    public string $name = '';

    public string $firstname = '';

    public string $email = '';

    public string $password = '';

    public string $password_confirmation = '';

    public bool $send_password = false;

    public $user_code;

    public function mount(Company $company)
    {
    }

    public function render()
    {
        return view('livewire.cabinet.users.create-user');
    }

    public function save()
    {
        Validator::make([
            'name' => $this->name,
            'firstname' => $this->firstname,
            'email' => $this->email,
            'password' => $this->password,
        ], [
            'name' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => [Rule::when(! $this->send_password, ['required', 'string', 'password_confirmation'])],
        ], [
            'name.required' => 'champ obligatoire',
            'firstname.required' => 'champ obligatoire',
            'email.required' => 'champ obligatoire',
            'password.required' => 'champ obligatoire',
        ]);

        $username = Str::slug($this->name.$this->firstname.rand(0, 999));

        if ($this->send_password) {
            $this->password = $this->generatePassword(self::PASSWORD_LENGTH);
        }

        $this->user_code = $this->generateUserCode(self::USER_CODE_LENGTH);

        while (User::whereUsername($this->user_code)->first()) {
            $this->user_code = $this->generateUserCode(self::USER_CODE_LENGTH);
        }

        $user = User::create([
            'username' => $this->user_code,
            'email' => $this->email,
            'firstname' => $this->firstname,
            'name' => $this->name,
            'password' => Hash::make($this->password),
            'user_id' => auth()->user()->id,
            'email_verified' => Carbon::now(),
        ])->assignRole('Ressource');

        \Mail::to($this->email)->send(new SendUserCredential($user->name, $user->username, $user->email, $this->password));

        $this->emit('getUserData');

        $this->closeModal();
    }

    private function generateUserCode($n)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
            if ($i == 3) {
                $randomString .= '-';
            }
        }

        return $randomString;
    }

    private function generatePassword($n)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }
}
