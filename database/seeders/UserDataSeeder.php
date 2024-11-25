<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\UserData;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserData::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        UserData::create([
            'name' => 'Siswa User 1',
            'email' => 'siswa1@example.com',
            'password' => Hash::make('password123'),
            'role' => 'siswa',
        ]);

        UserData::create([
            'name' => 'Siswa User 2',
            'email' => 'siswa2@example.com',
            'password' => Hash::make('password123'),
            'role' => 'siswa',
        ]);

        UserData::create([
            'name' => 'Siswa User 3',
            'email' => 'siswa3@example.com',
            'password' => Hash::make('password123'),
            'role' => 'siswa',
        ]);

        UserData::create([
            'name' => 'Siswa User 4',
            'email' => 'siswa4@example.com',
            'password' => Hash::make('password123'),
            'role' => 'siswa',
        ]);
    }
}
