<?php

namespace App\Http\Controllers\Authentication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register', [
            'title' => 'Pendaftaran'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHukumRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required|unique:users|email:dns',
                'password' => 'required|min:8',
            ]
        );
        $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::create($validatedData);
        event(new Registered($user));
        Auth::login($user);

        return redirect('/login')->with('success', '<strong>Berhasil mendaftar!</strong> Silahkan masuk menggunakan data yang sudah didaftarkan.');
    }
}
