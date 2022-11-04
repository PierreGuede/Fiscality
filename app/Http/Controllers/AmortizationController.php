<?php

namespace App\Http\Controllers;

use App\Fiscality\Amortizations\Amortization;
use App\Fiscality\Companies\Company;
use Illuminate\Http\Request;

class AmortizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $company = Company::find($id);

        return view('admin.adminWork.amortization', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fiscality\Amortizations\Amortization  $amortization
     * @return \Illuminate\Http\Response
     */
    public function show(Amortization $amortization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fiscality\Amortizations\Amortization  $amortization
     * @return \Illuminate\Http\Response
     */
    public function edit(Amortization $amortization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fiscality\Amortizations\Amortization  $amortization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Amortization $amortization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fiscality\Amortizations\Amortization  $amortization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amortization $amortization)
    {
        //
    }
}
