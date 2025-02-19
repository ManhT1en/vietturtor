<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseShift extends Model
{
    use HasFactory;

    protected $table = 'course_shifts';

    protected $fillable = ['shift', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
