<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherReintegrationController extends Controller
{
    public function index () {
        return view('admin.other-reintegration.index');
    }
}
