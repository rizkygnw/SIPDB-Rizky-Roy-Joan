<?php

namespace Database\Seeders;

use App\Models\StudentDepartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudentDepartment::create([
            'student_id' => 1,
            'department_id' => 1,
        ]);

        StudentDepartment::create([
            'student_id' => 2,
            'department_id' => 2,
        ]);

        StudentDepartment::create([
            'student_id' => 3,
            'department_id' => 3,
        ]);

        StudentDepartment::create([
            'student_id' => 4,
            'department_id' => 4,
        ]);

        StudentDepartment::create([
            'student_id' => 5,
            'department_id' => 5,
        ]);

    }
}
