<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Perdata;
use App\Http\Requests\StorePerdataRequest;
use App\Http\Requests\UpdatePerdataRequest;

class RoomChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.room.chat', [
            'title' => 'Ruang Chat'
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
     * @param  \App\Http\Requests\StorePerdataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePerdataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perdata  $perdata
     * @return \Illuminate\Http\Response
     */
    public function show(Perdata $perdata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perdata  $perdata
     * @return \Illuminate\Http\Response
     */
    public function edit(Perdata $perdata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePerdataRequest  $request
     * @param  \App\Models\Perdata  $perdata
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePerdataRequest $request, Perdata $perdata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perdata  $perdata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perdata $perdata)
    {
        //
    }
}
