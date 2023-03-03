<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Nurul Hidayah',
            'email' => 'nurulhidayyah45@gmail.com',
            'password' => bcrypt('123'),
            'nik' => 1101191095,
            'alamat' => 'Kp. Alasroban, Ds. Muara',
            'jk' => 'Laki-laki',
            'religion' => 'Islam',
            'tp_lahir' => 'lebak',
            'tg_lahir' => date('2000-04-27'),
            'no_hp' => '081298021608',
            'th_lulus' => '2018',
            'role_id' => 1
        ]);
    }
}
