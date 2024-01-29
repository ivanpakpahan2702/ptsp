<?php

namespace App\Http\Controllers;

use App\Models\Umum;
use App\Http\Requests\StoreUmumRequest;
use App\Http\Requests\UpdateUmumRequest;

class UmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('umum', [
            'title' => 'Bagian Umum dan Keuangan'
        ]);
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
     * @param  \App\Http\Requests\StoreUmumRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUmumRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Umum  $umum
     * @return \Illuminate\Http\Response
     */
    public function show(Umum $umum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Umum  $umum
     * @return \Illuminate\Http\Response
     */
    public function edit(Umum $umum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUmumRequest  $request
     * @param  \App\Models\Umum  $umum
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUmumRequest $request, Umum $umum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Umum  $umum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Umum $umum)
    {
        //
    }
}
