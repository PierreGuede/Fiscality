<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {

        $Permission=Permission::all();
        return view('admin.Permissions.index',['permission'=>$Permission]);
      
    }

    public function store(Request $request)
    {
        Permission::create([
            'name'=>$request['name'],
            'user_id'=>request()->user()->id
        ]);
        return redirect()->route('permission.index');
    }


    public function edit(Permission $id)
    {
        return view('admin.Permissions.update',['Permission'=>$id]);
    }

    public function update(Request $request,$id)
    {
        $Permission=Permission::find($id);
        $Permission->update(['name'=>$request['name'],]);
        return redirect()->route('permission.index');
    }
    public function destroy($id)
    {
        $Permission = Permission::find($id);
        $Permission->delete();
        return redirect()->route('permission.index');
    }
}
