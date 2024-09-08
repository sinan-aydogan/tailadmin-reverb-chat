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
        // Admin User Seeder
        $admin = \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@tailadmin.dev',
            'password'=> bcrypt('admin'),
            ]);
    }
}
