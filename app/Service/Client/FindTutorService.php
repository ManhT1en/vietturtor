<?php

namespace App\Service\Client;

use App\Models\Course;

class FindTutorService
{
    public function getAll()
    {
        $course = Course::all();
        return $course;
    }

    public function getById($id)
    {
        return Course::where('id', $id)->first();
    }
}
