<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       User::factory()->create([
        'name' => 'Admin',
        'email' => 'admin@gmail.com',
        'password' => Hash::make(env('DEFAULT_USER_PASSWORD', 'Password123')),
        'provider' => 'simple',
        'role' => 'admin',
        'status' => 'Active'
    ]);

    // Optional: create some random users for testing
    User::factory(3)->create();
    }
}
