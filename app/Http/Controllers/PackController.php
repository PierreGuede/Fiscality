<?php

namespace App\Http\Controllers;

use App\Fiscality\Packs\Pack;
use Illuminate\Http\Request;

class PackController extends Controller
{
    public function index()
    {
        $pack=Pack::all();
        return view('admin.packs.index',['pack'=>$pack]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255','unique:packs'],
        ]);
        $pack=Pack::create([
            'name'=>strtoupper($request['name']),
            'description'=>$request['description'],
            'max'=>$request['max'],
        ]);
        return redirect()->route('pack.index');
    }


    public function edit(Pack $id)
    {
        return view('admin.packs.update',['pack'=>$id]);
    }

    public function update(Request $request,$id)
    {
        $pack=Pack::find($id);
        $pack->update(['name'=>strtoupper($request['name']),
        'description'=>$request['description'],
        'max'=>$request['max'],]);
        return redirect()->route('pack.index');
    }
    public function destroy($id)
    {
        $pack = Pack::find($id);
        dd($pack);
        $pack->delete();
        return redirect()->route('pack.index');
    }
}
