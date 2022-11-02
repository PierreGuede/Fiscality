<?php

namespace App\Http\Controllers;

use App\Fiscality\Categories\Category;
use App\Fiscality\Companies\Company;
use App\Fiscality\Domains\Domain;
use App\Fiscality\TypeCompanies\TypeCompany;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('user_id', request()->user()->id)->with('roles')->get();
        $permission = Permission::all();
        $role = Role::where('user_id', request()->user()->id)->get();
        $company = Company::where('user_id', request()->user()->id)->get();

        return view('users.index', compact('users', 'permission', 'role', 'company'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $username = Str::slug($request['name'].$request['firstname'].rand(0, 999));
        $user = User::create([
            'name' => $request->name,
            'firstname' => $request->firstname,
            'username' => $username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_id' => request()->user()->id,
        ])->assignRole('Ressource');
        foreach ($request['company_id'] as $key => $value) {
            $user->personnel()->sync($value);
        }

        return redirect()->route('users.index');
    }

    public function enterprise()
    {
        $type = TypeCompany::all();
        $typeCat = Category::all();
        $domain = Domain::all();

        return view('auth.RegisteredProcessus', compact('type', 'typeCat', 'domain'));
    }
}
