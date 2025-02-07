<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'YannPl',
            'email' => 'yann@test.com',
            'password' => 'test',
        ]);

        // create 4 more users
        for ($i = 0; $i < 4; $i++) {
            User::factory()->create();
        }
    }
}
