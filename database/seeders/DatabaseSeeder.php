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
            "avatar" => '1.jpg',
            'email_verified_at' => now(),
        ]);
        User::create([
            "name" => "Sri Wahyuni",
            "email" => "sri.wahyuni1788@gmail.com",
            "password" => Hash::make('123456'),
            "role" => 'Pengguna',
            "agama" => 'Kristen Protestan',
            "jenis_kelamin" => 'w',
            "nik" => "1002021202000002",
            "kode_pos" => "32675",
            "avatar" => '2.png',
            'email_verified_at' => now(),
        ]);
        User::create([
            "name" => "Misha Petrenkov",
            "email" => "petrenko270200@gmail.com",
            "password" => Hash::make('123456'),
            "role" => 'Admin Perdata',
            "agama" => 'Kristen Protestan',
            "jenis_kelamin" => 'p',
            "nik" => "1002021202000002",
            "kode_pos" => "32675",
            "avatar" => '3.png',
            'email_verified_at' => now(),
        ]);
        User::create([
            "name" => "Burjouis Leonardo",
            "email" => "leonardo.da27@gmail.com",
            "password" => Hash::make('123456'),
            "role" => 'Admin Hukum',
            "agama" => 'Kristen Protestan',
            "jenis_kelamin" => 'p',
            "nik" => "1002021202000002",
            "kode_pos" => "32675",
            "avatar" => '4.jpg',
            'email_verified_at' => now(),
        ]);
        User::create([
            "name" => "Yjra Pajeet",
            "email" => "yjrahindi@gmail.com",
            "password" => Hash::make('123456'),
            "role" => 'Admin Hukum',
            "agama" => 'Islam',
            "jenis_kelamin" => 'p',
            "nik" => "1002021202000002",
            "kode_pos" => "32675",
            "avatar" => '5.jpg',
            'email_verified_at' => now(),
        ]);
        User::create([
            "name" => "Kuswandi Pakpahan",
            "email" => "kuswandi98.pakpahan@gmail.com",
            "password" => Hash::make('123456'),
            "role" => 'Master Admin',
            "agama" => 'Kristen Protestan',
            "jenis_kelamin" => 'p',
            "nik" => "1002021202000002",
            "kode_pos" => "32675",
            "avatar" => '6.jpg',
            'email_verified_at' => now(),
        ]);
    }
}
