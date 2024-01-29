<?php

namespace App\Http\Controllers;

use App\Models\Hukum;
use App\Http\Requests\StoreHukumRequest;
use App\Http\Requests\UpdateHukumRequest;

class HukumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hukum', [
            'title' => 'Bagian Hukum'
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
     * @param  \App\Http\Requests\StoreHukumRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHukumRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hukum  $hukum
     * @return \Illuminate\Http\Response
     */
    public function show(Hukum $hukum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hukum  $hukum
     * @return \Illuminate\Http\Response
     */
    public function edit(Hukum $hukum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHukumRequest  $request
     * @param  \App\Models\Hukum  $hukum
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHukumRequest $request, Hukum $hukum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hukum  $hukum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hukum $hukum)
    {
        //
    }
}
