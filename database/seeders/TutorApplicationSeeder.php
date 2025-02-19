<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TutorApplication;

class TutorApplicationSeeder extends Seeder
{
    public function run()
    {
        // Ứng tuyển 1
        TutorApplication::create([
            'course_id' => 1, // Khóa học 1
            'tutor_id' => 2,   // Gia sư 2
            'desired_rate' => 250000,
            'application_status' => 'pending',
        ]);

        // Ứng tuyển 2
        TutorApplication::create([
            'course_id' => 2, // Khóa học 2
            'tutor_id' => 3,   // Gia sư 3
            'desired_rate' => 300000,
            'application_status' => 'accepted',
        ]);

        // Ứng tuyển 3
        TutorApplication::create([
            'course_id' => 3, // Khóa học 3
            'tutor_id' => 4,   // Gia sư 4
            'desired_rate' => 220000,
            'application_status' => 'rejected',
        ]);

        // Ứng tuyển 4
        TutorApplication::create([
            'course_id' => 4, // Khóa học 4
            'tutor_id' => 5,   // Gia sư 5
            'desired_rate' => 280000,
            'application_status' => 'pending',
        ]);

        // Ứng tuyển 5
        TutorApplication::create([
            'course_id' => 5, // Khóa học 5
            'tutor_id' => 6,   // Gia sư 6
            'desired_rate' => 350000,
            'application_status' => 'accepted',
        ]);

        // Ứng tuyển 6
        TutorApplication::create([
            'course_id' => 6, // Khóa học 6
            'tutor_id' => 7,   // Gia sư 7
            'desired_rate' => 210000,
            'application_status' => 'rejected',
        ]);

        // Ứng tuyển 7
        TutorApplication::create([
            'course_id' => 7, // Khóa học 7
            'tutor_id' => 8,   // Gia sư 8
            'desired_rate' => 270000,
            'application_status' => 'pending',
        ]);

        // Ứng tuyển 8
        TutorApplication::create([
            'course_id' => 8, // Khóa học 8
            'tutor_id' => 9,   // Gia sư 9
            'desired_rate' => 300000,
            'application_status' => 'accepted',
        ]);

        // Ứng tuyển 9
        TutorApplication::create([
            'course_id' => 9, // Khóa học 9
            'tutor_id' => 10,  // Gia sư 10
            'desired_rate' => 250000,
            'application_status' => 'rejected',
        ]);

        // Ứng tuyển 10
        TutorApplication::create([
            'course_id' => 10, // Khóa học 10
            'tutor_id' => 11,  // Gia sư 11
            'desired_rate' => 320000,
            'application_status' => 'pending',
        ]);
    }
}
