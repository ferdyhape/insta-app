<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ferdy Hahan Pradana',
            'email' => 'ferdyhahan5@gmail.com',
            'phone' => '087856725286',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'Suyatno Bejo',
            'email' => 'suyatno5@gmail.com',
            'phone' => '087856725386',
            'password' => bcrypt('password')
        ]);
    }
}
