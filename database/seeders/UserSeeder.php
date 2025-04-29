<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            User::create([
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@amo.com',
                'password' => bcrypt('password'),
            ]);
        }
    }
}
