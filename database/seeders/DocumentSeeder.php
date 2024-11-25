<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Documents;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Documents::create([
            'student_id' => 1, // Assuming this student ID exists
            'document_type' => 'KTP',
            'file_path' => 'documents/ktp_siswa1.pdf',
        ]);

        Documents::create([
            'student_id' => 2,
            'document_type' => 'Ijazah',
            'file_path' => 'documents/ijazah_siswa2.pdf',
        ]);

        Documents::create([
            'student_id' => 3,
            'document_type' => 'Kartu Pelajar',
            'file_path' => 'documents/kartu_pelajar_siswa3.pdf',
        ]);

        Documents::create([
            'student_id' => 4,
            'document_type' => 'Akta Kelahiran',
            'file_path' => 'documents/akta_siswa4.pdf',
        ]);

        Documents::create([
            'student_id' => 5,
            'document_type' => 'KTP',
            'file_path' => 'documents/ktp_siswa5.pdf',
        ]);
    }
}
