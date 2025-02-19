<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Tạo phụ huynh 1
        User::create([
            'user_type' => 'parent',
            'name' => 'Phụ huynh 1',
            'email' => 'parent1@example.com',
            'password' => Hash::make('password'),
            'phone' => '0123456789',
            'address' => '123 Main St',
            'email_verified_at'=> '2024-11-14 01:20:12'
        ]);

        // Tạo phụ huynh 2
        User::create([
            'user_type' => 'parent',
            'name' => 'Phụ huynh 2',
            'email' => 'parent2@example.com',
            'password' => Hash::make('password'),
            'phone' => '0123456790',
            'address' => '789 Main St',
            'email_verified_at'=> '2024-11-14 01:20:12'
        ]);

        // Tạo gia sư 1
        User::create([
            'user_type' => 'tutor',
            'name' => 'Gia sư 1',
            'email' => 'tutor1@example.com',
            'password' => Hash::make('password'),
            'phone' => '0987654321',
            'address' => '456 Main St',
            'email_verified_at'=> '2024-11-14 01:20:12'
        ]);

        // Tạo gia sư 2
        User::create([
            'user_type' => 'tutor',
            'name' => 'Gia sư 2',
            'email' => 'tutor2@example.com',
            'password' => Hash::make('password'),
            'phone' => '0987653321',
            'address' => '456 Main St',
            'email_verified_at'=> '2024-11-14 01:20:12'
        ]);

        // Tạo gia sư 3
        User::create([
            'user_type' => 'tutor',
            'name' => 'Gia sư 3',
            'email' => 'tutor3@example.com',
            'password' => Hash::make('password'),
            'phone' => '0987651122',
            'address' => '1011 Main St',
            'email_verified_at'=> '2024-11-14 01:20:12'
        ]);

        // Tạo gia sư 4
        User::create([
            'user_type' => 'tutor',
            'name' => 'Gia sư 4',
            'email' => 'tutor4@example.com',
            'password' => Hash::make('password'),
            'phone' => '0987654433',
            'address' => '1111 Main St',
            'email_verified_at'=> '2024-11-14 01:20:12'
        ]);

        // Tạo phụ huynh 3
        User::create([
            'user_type' => 'parent',
            'name' => 'Phụ huynh 3',
            'email' => 'parent3@example.com',
            'password' => Hash::make('password'),
            'phone' => '0123456901',
            'address' => '2222 Main St',
            'email_verified_at'=> '2024-11-14 01:20:12'
        ]);

        // Tạo gia sư 5
        User::create([
            'user_type' => 'tutor',
            'name' => 'Gia sư 5',
            'email' => 'tutor5@example.com',
            'password' => Hash::make('password'),
            'phone' => '0987655555',
            'address' => '3333 Main St',
            'email_verified_at'=> '2024-11-14 01:20:12'
        ]);

        // Tạo gia sư 6
        User::create([
            'user_type' => 'tutor',
            'name' => 'Gia sư 6',
            'email' => 'tutor6@example.com',
            'password' => Hash::make('password'),
            'phone' => '0987656666',
            'address' => '4444 Main St',
            'email_verified_at'=> '2024-11-14 01:20:12'
        ]);
    }
}
