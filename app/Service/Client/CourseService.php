<?php

namespace App\Service\Client;

use App\Models\Course;

class CourseService
{
    public function getAllCouse()
    {
        return Course::with(['subjects', 'courseDays', 'courseShifts'])->get();;
    }
}
