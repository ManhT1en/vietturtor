<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            TutorProfileSeeder::class,
            CourseSeeder::class,
            TutorApplicationSeeder::class,
            SessionSeeder::class,
            ReviewSeeder::class,
            PaymentSeeder::class,
            NotificationSeeder::class,
            ReportSeeder::class,
            CertificateSeeder::class,
            TeachingHistorySeeder::class,
            SubjectSeeder::class,
            SubjectCourseSeeder::class,
            CourseDaySeeder::class,
            CourseShiftSeeder::class,
        ]);
    }
}
