<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class HukumController extends Controller
{
    public function index()
    {
        return view('user.hukum', [
            'title' => 'Bagian Hukum',
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
