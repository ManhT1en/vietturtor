<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseDay;
use App\Models\CourseShift;
use App\Models\Subject;
use App\Service\Client\FindTutorService;
use Illuminate\Http\Request;

class FindTutorController extends Controller
{
    private $findTutorService;
    //
    public function __construct(FindTutorService $findTutorService)
    {
        $this->findTutorService = $findTutorService;
    }

    public function index()
    {
        // Lấy ID từ user đăng nhập
        // $parent_id = auth()->user()->id;
        $parent_id = 1;
        $subjects = Subject::all();
        return view('client.FindTutor.FindTutor', compact('subjects', 'parent_id'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'parent_id' => 'required|exists:users,id',
            'level' => 'required|string|in:university,college,other',
            'num_of_students' => 'required|integer|min:1',
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'start_date' => 'required|date',
            'desired_duration_per_session' => 'nullable|string',
            'sessions_per_week' => 'nullable|integer',
            'description' => 'required|string',
            'min_rate' => 'required|integer|min:0',
            'max_rate' => 'required|integer|min:0|gte:min_rate',
            'subject_ids' => 'required|array',
            'subject_ids.*' => 'exists:subjects,id',
            'course_days' => 'required|array',
            'course_shifts' => 'required|array',
        ]);

        // Tạo khóa học mới
        $course = Course::create($validatedData);

        // Lưu các mối quan hệ nhiều-nhiều với subjects
        $course->subjects()->sync($request->input('subject_ids'));

        // Lưu các ngày học vào bảng CourseDay
        foreach ($request->input('course_days') as $day) {
            CourseDay::create([
                'course_id' => $course->id,
                'days' => $day,
            ]);
        }

        // Lưu các buổi học vào bảng CourseShift
        foreach ($request->input('course_shifts') as $shift) {
            CourseShift::create([
                'course_id' => $course->id,
                'shift' => $shift,
            ]);
        }

        return redirect()->back()->with('success', 'Yêu cầu của bạn đã được gửi thành công!');
    }
}
