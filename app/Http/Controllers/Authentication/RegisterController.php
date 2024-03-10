<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    
    public function index()
    {
        return view('authentication.register', [
            'title' => 'Pendaftaran',
        ]);
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required|unique:users|email:dns',
                'password' => 'required|min:6',
            ]
        );
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['dark_mode'] = '1';
        $validatedData['avatar_profil'] = 'default_user.png';
        $user = User::create($validatedData);
        event(new Registered($user));
        Auth::login($user);
        return redirect('/')->with('Success-Register', 'Silahkan Cek Surel Email Anda, Untuk Lakukan Aktivasi');
    }
}
