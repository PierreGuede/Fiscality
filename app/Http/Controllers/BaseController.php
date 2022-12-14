<?php

namespace App\Http\Controllers;

use App\Fiscality\Bases\Base;
use App\Fiscality\Bases\Requests\CreateBaseRequest;
use App\Fiscality\Bases\Requests\UpdateBaseRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BaseController extends Controller
{
    public function index()
    {
        $base = Base::all();

        return view('admin.base.index', ['base' => $base]);
    }
    public function create()
    {

        return view('admin.base.create');
    }

    public function store(CreateBaseRequest $request)
    {
        $standarcode = Str::slug($request['name'], '_');
        $base = Base::create([
            'name' => $request['name'],
            'code' => $standarcode,
        ]);

        return redirect()->route('base.index');
    }

    public function edit(Base $id)
    {
        return view('admin.base.update', ['base' => $id]);
    }

    public function update(UpdateBaseRequest $request, $id)
    {
        $base = Base::find($id);
        $base->update(['name' => $request['name']]);

        return redirect()->route('base.index');
    }

    public function destroy($id)
    {
        $base = Base::find($id);
        dd($base);
        $base->delete();

        return redirect()->route('base.index');
    }
}
