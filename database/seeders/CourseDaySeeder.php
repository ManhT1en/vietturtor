<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseDay;

class CourseDaySeeder extends Seeder
{
    public function run()
    {
        $courseDays = [
            ['course_id' => 1, 'days' => 'Monday'],
            ['course_id' => 2, 'days' => 'Tuesday'],
            ['course_id' => 3, 'days' => 'Wednesday'],
            ['course_id' => 4, 'days' => 'Thursday'],
            ['course_id' => 5, 'days' => 'Friday'],
            ['course_id' => 6, 'days' => 'Saturday'],
            ['course_id' => 7, 'days' => 'Sunday'],
        ];

        foreach ($courseDays as $courseDay) {
            CourseDay::create($courseDay);
        }
    }
}
