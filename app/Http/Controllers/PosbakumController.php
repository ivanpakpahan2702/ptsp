<?php

namespace App\Http\Controllers;

use App\Models\Posbakum;
use App\Http\Requests\StorePosbakumRequest;
use App\Http\Requests\UpdatePosbakumRequest;

class PosbakumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posbakum', [
            'title' => 'Posbakum'
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
     * @param  \App\Http\Requests\StorePosbakumRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePosbakumRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posbakum  $posbakum
     * @return \Illuminate\Http\Response
     */
    public function show(Posbakum $posbakum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posbakum  $posbakum
     * @return \Illuminate\Http\Response
     */
    public function edit(Posbakum $posbakum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePosbakumRequest  $request
     * @param  \App\Models\Posbakum  $posbakum
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePosbakumRequest $request, Posbakum $posbakum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posbakum  $posbakum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posbakum $posbakum)
    {
        //
    }
}
