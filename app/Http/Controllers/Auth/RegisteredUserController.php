<?php

namespace App\Http\Controllers\Auth;

use App\Fiscality\Users\Requests\RegisterRequest;
use App\Http\Controllers\Controller;
use App\Mail\SendUserCredential;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterRequest $request)
    {

        $username = $this->generateUserCode(8);
        try {
        DB::beginTransaction();


        $user = User::create([
            'name' => $request->name,
            'firstname' => $request->firstname,
            'username' => $username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->givePermissionTo('create', 'read', 'edit', 'delete');

        event(new Registered($user));
//        \Mail::to($request->email)->send(new SendUserCredential($user->name, $user->username, $user->email, $request->password));

//        Auth::login($user);
        notify()->success('Veuillez vérifiez votre email pour valider votre compte.');
        DB::commit();
        return redirect()->route('users.enterprise');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
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
}
