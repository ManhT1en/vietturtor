<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeachingHistory extends Model
{
    use HasFactory;

    protected $table = 'teaching_history';

    protected $fillable = [
        'course_id', 'tutor_id', 'student_id', 'date', 'start_time', 'end_time', 'status', 'feedback'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function tutor()
    {
        return $this->belongsTo(User::class, 'tutor_id');
    }

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }
}
