<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'user_type',
        'name',
        'email',
        'password',
        'phone',
        'address'
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at',
    ];

    public function tutorProfile()
    {
        return $this->hasOne(TutorProfile::class, 'user_id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'parent_id');
    }

    public function applications()
    {
        return $this->hasMany(TutorApplication::class, 'tutor_id');
    }

    public function sessions()
    {
        return $this->hasMany(Session::class, 'tutor_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'student_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class, 'reported_by');
    }

    public function teachingHistoryAsTutor()
{
    return $this->hasMany(TeachingHistory::class, 'tutor_id');
}

public function teachingHistoryAsStudent()
{
    return $this->hasMany(TeachingHistory::class, 'student_id');
}

}
