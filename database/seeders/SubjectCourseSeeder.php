<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubjectCourse;

class SubjectCourseSeeder extends Seeder
{
    public function run()
    {
        $subjectCourses = [
            ['subject_id' => 1, 'course_id' => 1],
            ['subject_id' => 2, 'course_id' => 2],
            ['subject_id' => 3, 'course_id' => 3],
            ['subject_id' => 4, 'course_id' => 4],
            ['subject_id' => 5, 'course_id' => 5],
            ['subject_id' => 6, 'course_id' => 6],
            ['subject_id' => 7, 'course_id' => 7],
        ];

        foreach ($subjectCourses as $subjectCourse) {
            SubjectCourse::create($subjectCourse);
        }
    }
}
