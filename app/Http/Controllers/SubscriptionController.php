<?php

namespace App\Http\Controllers;

use App\Fiscality\Packs\Pack;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function renew()
    {
        $user = auth()->user();
        $pack = Subscription::where('user_id', auth()->user()->id)->first();
        $cabinet_packs = Pack::whereType($pack->packs->type)->get();

        return view('admin.packs.renew-pack', compact('user', 'pack', 'cabinet_packs'));
    }
}
