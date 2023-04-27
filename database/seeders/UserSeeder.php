<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'user uno',
                'email' => 'user1@email.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'user dos',
                'email' => 'user2@email.com',
                'password' => bcrypt('password')
            ],
        ]);
    }
}
