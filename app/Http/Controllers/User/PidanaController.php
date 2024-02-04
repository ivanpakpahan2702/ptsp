<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pidana;

class PidanaController extends Controller
{

    public function index()
    {
        return view('user.pidana', [
            'title' => 'Bagian Pidana',
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

    public function destroy(Pidana $pidana)
    {
        //
    }
}
