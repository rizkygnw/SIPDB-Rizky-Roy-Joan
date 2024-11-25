<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Log;

class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Log::create([
            'user_id' => 1, // Assuming this user ID exists
            'activity' => 'Login',
        ]);

        Log::create([
            'user_id' => 2,
            'activity' => 'Upload Document',
        ]);

        Log::create([
            'user_id' => 3,
            'activity' => 'Edit Profile',
        ]);

        Log::create([
            'user_id' => 4,
            'activity' => 'Login',
        ]);

        Log::create([
            'user_id' => 5,
            'activity' => 'Payment',
        ]);
        //
    }
}
