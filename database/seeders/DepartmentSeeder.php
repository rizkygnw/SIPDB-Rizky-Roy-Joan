<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create([
            'name'=> 'Teknik Informatika',
        ]);
        Department::create([
            'name'=> 'Manajemen',
        ]);
        Department::create([
            'name'=> 'Akuntansi',
        ]);
        Department::create([
            'name'=> 'Sistem Informasi',
        ]);
        Department::create([
            'name'=> 'Desain Grafis',
        ]);
    }
}
