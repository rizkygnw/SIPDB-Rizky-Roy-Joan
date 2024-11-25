<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Payment::create([
            'student_id' => 1,
            'payment_date' => '2024-11-01',
            'amount' => 100000,
            'receipt_number' => 'INV001',
        ]);

        Payment::create([
            'student_id' => 2,
            'payment_date' => '2024-11-02',
            'amount' => 120000,
            'receipt_number' => 'INV002',
        ]);

        Payment::create([
            'student_id' => 3,
            'payment_date' => '2024-11-03',
            'amount' => 110000,
            'receipt_number' => 'INV003',
        ]);

        Payment::create([
            'student_id' => 4,
            'payment_date' => '2024-11-04',
            'amount' => 130000,
            'receipt_number' => 'INV004',
        ]);

        Payment::create([
            'student_id' => 5,
            'payment_date' => '2024-11-05',
            'amount' => 125000,
            'receipt_number' => 'INV005',
        ]);
        //
    }
}
