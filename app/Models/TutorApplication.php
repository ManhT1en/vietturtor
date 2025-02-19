<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'tutor_id',
        'desired_rate',
        'application_status'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function tutor()
    {
        return $this->belongsTo(User::class, 'tutor_id');
    }
}
