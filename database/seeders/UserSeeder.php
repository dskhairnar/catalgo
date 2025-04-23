<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
            'status' => 'active',
            'phone' => '1234567890',
            'address' => '123 Admin Street'
        ]);

        // Business Users
        User::create([
            'name' => 'Business Owner 1',
            'email' => 'business1@example.com',
            'password' => Hash::make('password123'),
            'role' => 'business',
            'status' => 'active',
            'phone' => '2345678901',
            'address' => '456 Business Ave'
        ]);

        User::create([
            'name' => 'Business Owner 2',
            'email' => 'business2@example.com',
            'password' => Hash::make('password123'),
            'role' => 'business',
            'status' => 'active',
            'phone' => '3456789012',
            'address' => '789 Enterprise Rd'
        ]);

        // Regular Users
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('password123'),
            'role' => 'user',
            'status' => 'active',
            'phone' => '4567890123',
            'address' => '321 User Lane'
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'password' => Hash::make('password123'),
            'role' => 'user',
            'status' => 'active',
            'phone' => '5678901234',
            'address' => '654 Customer Blvd'
        ]);
    }
}