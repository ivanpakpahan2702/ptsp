<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class PerdataController extends Controller
{

    public function index()
    {
        return view('user.perdata', [
            'title' => 'Bagian Perdata',
        ]);
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
