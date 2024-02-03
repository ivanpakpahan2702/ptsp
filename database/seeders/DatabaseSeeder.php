<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
            "password" => '$10$u1jNkhBXsMqHDtDMomU5p.zBBtEuqwVtHoM149LMjnwZs1are3JHC',
            "role" => 'user',
            "agama" => 'Kristen Protestan',
            "avatar" => 'ivan.png',
            "jenis_kelamin" => 'p',
            "nik" => "1002021202000002",
            "kode_pos" => "32675",
        ]);
        User::factory(10)->create();
    }
}
