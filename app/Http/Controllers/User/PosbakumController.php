<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Posbakum;

class PosbakumController extends Controller
{
    
    public function index()
    {
        return view('user.posbakum', [
            'title' => 'Posbakum'
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
