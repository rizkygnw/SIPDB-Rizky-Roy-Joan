<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'user_id' => 2, // Assuming this user ID exists
            'name' => 'Siswa 1',
            'address' => 'Jl. Contoh No. 1',
            'birth_date' => '2000-01-01',
            'school_origin' => 'SMA A',
            'status' => 'aktif',
        ]);

        Student::create([
            'user_id' => 3,
            'name' => 'Siswa 2',
            'address' => 'Jl. Contoh No. 2',
            'birth_date' => '2000-02-02',
            'school_origin' => 'SMA B',
            'status' => 'aktif',
        ]);

        Student::create([
            'user_id' => 4,
            'name' => 'Siswa 3',
            'address' => 'Jl. Contoh No. 3',
            'birth_date' => '2000-03-03',
            'school_origin' => 'SMA C',
            'status' => 'aktif',
        ]);

        Student::create([
            'user_id' => 5,
            'name' => 'Siswa 4',
            'address' => 'Jl. Contoh No. 4',
            'birth_date' => '2000-04-04',
            'school_origin' => 'SMA D',
            'status' => 'aktif',
        ]);

        Student::create([
            'user_id' => 6,
            'name' => 'Siswa 5',
            'address' => 'Jl. Contoh No. 5',
            'birth_date' => '2000-05-05',
            'school_origin' => 'SMA E',
            'status' => 'aktif',
        ]);
    }
}
