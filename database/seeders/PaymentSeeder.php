<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    public function run()
    {
        // Thanh toán 1
        Payment::create([
            'course_id' => 1,
            'student_id' => 1,
            'tutor_id' => 2,
            'amount' => 500000,
            'payment_type' => 'per_course',
            'status' => 'completed',
            'platform_fee' => 50000,
        ]);

        // Thanh toán 2
        Payment::create([
            'course_id' => 2,
            'student_id' => 3,
            'tutor_id' => 4,
            'amount' => 1000000,
            'payment_type' => 'per_session',
            'status' => 'pending',
            'platform_fee' => 100000,
        ]);

        // Thanh toán 3
        Payment::create([
            'course_id' => 3,
            'student_id' => 5,
            'tutor_id' => 6,
            'amount' => 750000,
            'payment_type' => 'per_course',
            'status' => 'completed',
            'platform_fee' => 75000,
        ]);

        // Thanh toán 4
        Payment::create([
            'course_id' => 4,
            'student_id' => 7,
            'tutor_id' => 8,
            'amount' => 2000000,
            'payment_type' => 'per_session',
            'status' => 'completed',
            'platform_fee' => 200000,
        ]);

        // Thanh toán 5
        Payment::create([
            'course_id' => 5,
            'student_id' => 9,
            'tutor_id' => 10,
            'amount' => 300000,
            'payment_type' => 'per_course',
            'status' => 'failed',
            'platform_fee' => 30000,
        ]);

        // Thanh toán 6
        Payment::create([
            'course_id' => 6,
            'student_id' => 11,
            'tutor_id' => 12,
            'amount' => 1500000,
            'payment_type' => 'per_session',
            'status' => 'completed',
            'platform_fee' => 150000,
        ]);

        // Thanh toán 7
        Payment::create([
            'course_id' => 7,
            'student_id' => 13,
            'tutor_id' => 14,
            'amount' => 450000,
            'payment_type' => 'per_course',
            'status' => 'pending',
            'platform_fee' => 45000,
        ]);

        // Thanh toán 8
        Payment::create([
            'course_id' => 8,
            'student_id' => 15,
            'tutor_id' => 16,
            'amount' => 2500000,
            'payment_type' => 'per_session',
            'status' => 'completed',
            'platform_fee' => 250000,
        ]);

        // Thanh toán 9
        Payment::create([
            'course_id' => 9,
            'student_id' => 17,
            'tutor_id' => 18,
            'amount' => 1200000,
            'payment_type' => 'per_session',
            'status' => 'failed',
            'platform_fee' => 120000,
        ]);

        // Thanh toán 10
        Payment::create([
            'course_id' => 10,
            'student_id' => 19,
            'tutor_id' => 20,
            'amount' => 600000,
            'payment_type' => 'per_course',
            'status' => 'completed',
            'platform_fee' => 60000,
        ]);
    }
}
