<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Fiscality\Domains\Domain;
use Spatie\Permission\Models\Role;
use App\Fiscality\Companies\Company;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Fiscality\Categories\Category;
use Spatie\Permission\Models\Permission;
use App\Fiscality\TypeCompanies\TypeCompany;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('user_id',request()->user()->id)->with('roles')->get();
        $permission=Permission::all();
        $role=Role::where('user_id',request()->user()->id)->get();
        $company=Company::where('user_id',request()->user()->id)->get();

        return view('users.index', compact('users','permission','role','company'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $username=Str::slug($request['name'].$request['firstname'].rand(0,999));
        $user = User::create([
            'name' => $request->name,
            'firstname' => $request->firstname,
            'username' => $username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_id'=>request()->user()->id
        ])->assignRole('Ressource');
        foreach ($request['company_id'] as $key => $value) {
            $user->personnel()->sync($value);
        }
        return redirect()->route('users.index');

    }
    public function enterprise(){
        $type=TypeCompany::all();
        $typeCat=Category::all();
        $domain=Domain::all();
        return view('auth.RegisteredProcessus', compact('type','typeCat','domain'));
    }
}
