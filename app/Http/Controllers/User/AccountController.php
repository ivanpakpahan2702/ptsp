<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $user = User::find($user_id);

        if (($user_now->role == 'master-admin')) {
            dd('Continue');
        } elseif ((($user_now->id) != $user_id)) {
            abort(403);
        } else {
            $rules = [
                'name' => 'required|max:255',
                'avatar_profil' => 'image|file|max:1024',
                'tempat_lahir' => '',
                'tanggal_lahir' => '',
                'agama' => '',
                'jenis_kelamin' => '',
                'alamat' => '',
                'kode_pos' => '',
                'no_telpon' => '',
                'kewarganegaraan' => '',
            ];

            if ($request->email != $user->email) {
                $rules['email'] = 'required|unique:users|email:dns';
            }

            if ($request->nik != $user->nik) {
                $rules['nik'] = 'required';
            }

            $validated_data = $request->validate($rules);

            if ($request->email != $user->email) {
                $validated_data['email_verified_at'] = null;
            }

            if ($request->file('avatar_profil')) {
                if ($user_now->avatar_profil != null) {
                    unlink(public_path() . "/assets/images/account_avatar/" . $user_now->avatar_profil);
                }
                $validated_data['avatar_profil'] = date('d-m-Y_H-i-s') . "_" . uniqid() . "_" . $request->avatar_profil->getClientOriginalName();
                $image_path = "/assets/images/account_avatar/" . $validated_data['avatar_profil'];
                file_put_contents(public_path() . $image_path, file_get_contents($request->file('avatar_profil')));
            }

            if (!($request->file('avatar_profil')) && ($user->avatar_profil != null)) {
                if ($user_now->avatar_profil != null) {
                    unlink(public_path() . "/assets/images/account_avatar/" . $user_now->avatar_profil);
                }
                $validated_data['avatar_profil'] = null;
            }

            DB::table('users')
                ->where('id', $user_id)
                ->update($validated_data);

            return redirect('/account')->with('success-profil', 'Berhasil update akun!');
        }

    }

    public function update_password(Request $request, $user_id)
    {
        $user_now = Auth::user();

        if (($user_now->role == 'master-admin')) {
            dd('Continue');
        } elseif ((($user_now->id) != $user_id)) {
            abort(403);
        } else {
            $rules = [
                'password' => 'required|min:6',
            ];
            $validated_data = $request->validate($rules);
            $validated_data['password'] = Hash::make($validated_data['password']);
            DB::table('users')
                ->where('id', $user_id)
                ->update($validated_data);

            return redirect('/account')->with('success-pass', 'Berhasil update password!');
        }
    }

    public function destroy(User $user)
    {
        $user_now = Auth::user();

        if (($user_now->role == 'master-admin')) {
            dd('Continue');
        } elseif ((($user_now->id) != $user->id)) {
            abort(403);
        } else {
            User::destroy($user->id);
            return redirect('/logout');
        }
    }
}
