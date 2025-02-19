<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseShift;

class CourseShiftSeeder extends Seeder
{
    public function run()
    {
        $courseShifts = [
            ['course_id' => 1, 'shift' => 'Sáng'],
            ['course_id' => 2, 'shift' => 'Chiều'],
            ['course_id' => 3, 'shift' => 'Tối'],
            ['course_id' => 4, 'shift' => 'Sáng'],
            ['course_id' => 5, 'shift' => 'Chiều'],
            ['course_id' => 6, 'shift' => 'Tối'],
            ['course_id' => 7, 'shift' => 'Sáng'],
        ];

        foreach ($courseShifts as $courseShift) {
            CourseShift::create($courseShift);
        }
    }
}
