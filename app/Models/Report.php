<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'reported_by',
        'course_id',
        'description',
        'status',
        'resolved_at'
    ];

    public function reportedBy()
    {
        return $this->belongsTo(User::class, 'reported_by');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}

