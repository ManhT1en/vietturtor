<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'subject_course', 'subject_id', 'course_id');
    }
}
