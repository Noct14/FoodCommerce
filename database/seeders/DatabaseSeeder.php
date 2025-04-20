<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Admin
        User::factory()->create([
            'name' => 'Admin Noct',
            'email' => 'admin@email.com',
            'password'=> bcrypt('123'),
            'roles' => 'admin',
            'email_verified_at' => null,
        ]);

        // Seller
        User::factory()->create([
            'name' => 'Toko Katsu Bakar',
            'email' => 'seller@email.com',
            'password'=> bcrypt('123'),
            'roles' => 'seller',
            'email_verified_at' => null,
        ]);

        // UEC
        User::factory()->create([
            'name' => 'UEC',
            'email' => 'uec@email.com',
            'password'=> bcrypt('123'),
            'roles' => 'UEC',
            'email_verified_at' => null,
        ]);

        // Student
        User::factory()->create([
            'name' => 'Andhika Putratama',
            'email' => 'student@civitas.ukrida.ac.id',
            'password'=> bcrypt('123'),
            'roles' => 'student',
            'email_verified_at' => null,
        ]);
    }
}
