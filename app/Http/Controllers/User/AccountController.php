<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHukumRequest;
use App\Http\Requests\UpdateHukumRequest;
use App\Models\Hukum;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('user.account', [
            'title' => 'Data & Akun',
            'user' => $user,
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
