<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Ivan Pakpahan",
            "email" => "ivanpakpahanchrst@gmail.com",
            "password" => Hash::make('123456'),
            "role" => 'Pengguna',
            "agama" => 'Kristen Protestan',
            "jenis_kelamin" => 'p',
            "nik" => "1002021202000002",
            "kode_pos" => "32675",
        ]);
    }
}
