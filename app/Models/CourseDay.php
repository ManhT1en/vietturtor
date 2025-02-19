<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDay extends Model
{
    use HasFactory;

    protected $table = 'course_day';

    protected $fillable = ['days', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
