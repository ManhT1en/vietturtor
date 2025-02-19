<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'tutor_profile_id', 'title', 'image', 'issued_date', 'description'
    ];

    public function tutorProfile()
    {
        return $this->belongsTo(TutorProfile::class, 'tutor_profile_id');
    }
}