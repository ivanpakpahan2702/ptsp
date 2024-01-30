<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pidana;
use App\Http\Requests\StorePidanaRequest;
use App\Http\Requests\UpdatePidanaRequest;

class PidanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.pidana', [
            'title' => 'Bagian Pidana'
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
     * @param  \App\Http\Requests\StorePidanaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePidanaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pidana  $pidana
     * @return \Illuminate\Http\Response
     */
    public function show(Pidana $pidana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pidana  $pidana
     * @return \Illuminate\Http\Response
     */
    public function edit(Pidana $pidana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePidanaRequest  $request
     * @param  \App\Models\Pidana  $pidana
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePidanaRequest $request, Pidana $pidana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pidana  $pidana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pidana $pidana)
    {
        //
    }
}
