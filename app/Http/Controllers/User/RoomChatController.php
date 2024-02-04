<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class RoomChatController extends Controller
{

    public function index()
    {
        return view('user.room.chat', [
            'title' => 'Ruang Chat',
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
