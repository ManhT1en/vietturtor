<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'level',
        'location',
        'num_of_students',
        'gender_preference',
        'start_date',
        'min_rate',
        'max_rate',
        'description',
        'desired_duration_per_session', // Thời lượng giờ 1 buổi mong muốn               // Thời gian có thể học
        'sessions_per_week',             // Bao nhiêu buổi 1 tuần
        'title'                          // Tiêu đề ngắn gọn
    ];

    public function parent()
    {
        return $this->belongsTo(User::class, 'parent_id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'subject_course', 'course_id', 'subject_id');
    }

    public function applications()
    {
        return $this->hasMany(TutorApplication::class);
    }

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function teachingHistory()
    {
        return $this->hasMany(TeachingHistory::class, 'course_id');
    }

    public function hasActiveSessions()
    {
        return $this->sessions()->where('status', 'active')->exists();
    }

    public function subjectCourses()
    {
        return $this->hasMany(SubjectCourse::class, 'course_id');
    }

    public function courseDays()
    {
        return $this->hasMany(CourseDay::class, 'course_id');
    }

    public function courseShifts()
    {
        return $this->hasMany(CourseShift::class, 'course_id');
    }
}
