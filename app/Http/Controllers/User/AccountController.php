<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        return view('user.account', [
            'title' => 'Data & Akun',
            'user' => $user,
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
    }

    public function update(Request $request, $user_id)
    {
        $user_now = Auth::user();
        if (($user_now->role == 'master-admin')) {
            dd('Gas Pak Bos');
        } elseif ((($user_now->id) != $user_id)) {
            abort(403);
        } else {
            $affected = DB::table('users')
                ->where('id', $user_id)
                ->update(
                    ['email_verified_at' => null, 'name' => 'Ivan Pakpahan Van Der Sar', 'password' => $user_now->password]
                );
        }
    }

    public function destroy()
    {
        //
    }
}
