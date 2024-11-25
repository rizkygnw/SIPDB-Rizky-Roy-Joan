<?php

namespace Database\Seeders;

use App\Models\Registration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Registration::created([
            'student_id' =>1,
            'registration_date' => '2024-11-01',
            'status' => 'terdaftar',
        ]);

        Registration::created([
            'student_id' =>2,
            'registration_date' => '2024-11-02',
            'status' => 'terdaftar',
        ]);

        Registration::created([
            'student_id' =>3,
            'registration_date' => '2024-11-03',
            'status' => 'terdaftar',
        ]);

        Registration::created([
            'student_id' =>4,
            'registration_date' => '2024-11-04',
            'status' => 'terdaftar',
        ]);

        Registration::created([
            'student_id' =>5,
            'registration_date' => '2024-11-05',
            'status' => 'terdaftar',
        ]);
    }
}
