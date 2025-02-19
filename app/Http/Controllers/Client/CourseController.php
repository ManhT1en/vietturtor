<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Service\Client\CourseService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    protected $courseService;
    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

    public function index()
    {
        // lay danh sach khoa hoc
        $listCourse = $this->courseService->getAllCouse();

        return view('client.course.CourseIndex', compact('listCourse'));
    }
}
