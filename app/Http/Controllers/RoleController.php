<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * It returns the view of the roles index page.
     *
     * @return The index view is being returned.
     */
    public function index()
    {
        $user = request()->user();
        if ($user->hasRole('Super-Admin')) {
            $role = Role::all();
            $permission = Permission::all();

            return view('admin.roles.index', ['role' => $role, 'permission' => $permission]);
        } else {
            $role = Role::where('user_id', request()->user()->id)->get();
            $permission = Permission::all();

            return view('admin.roles.index', ['role' => $role, 'permission' => $permission]);
        }
    }

    public function store(Request $request)
    {
        $role = Role::create([
            'name' => $request['name'],
            'user_id' => request()->user()->id,
        ]);
        $role->givePermissionTo($request['permission']);

        return redirect()->route('role.index');
    }

    public function edit(Role $id)
    {
        $permission = Permission::all();

        return view('admin.roles.update', ['role' => $id, 'permission' => $permission]);
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->update(['name' => $request['name']]);
        $role->givePermissionTo($request['permission']);

        return redirect()->route('role.index');
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();

        return redirect()->route('role.index');
    }
}
