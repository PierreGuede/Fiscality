<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Fiscality\Packs\Pack;

class SubscriptionController extends Controller
{
    public function renew(){
        $user=auth()->user();
        $pack=Subscription::where('user_id',auth()->user()->id)->first();
        $cabinet_packs = Pack::whereType($pack->packs->type)->get();
        return view('admin.packs.renew-pack',compact('user','pack','cabinet_packs'));
    }
}
