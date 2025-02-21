<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Al', 'email' => 'alfathdry@gmail.com', 'password' => bcrypt('Al')],
            ['name' => 'Alfat', 'email' => 'alfat@gmail.com', 'password' => bcrypt('Alfat')],
            ['name' => 'Alfathry', 'email' => 'alfathdryy@gmail.com', 'password' => bcrypt('Alfathdry')],
        ];
        \App\Models\User::insert($data);
    }
}
