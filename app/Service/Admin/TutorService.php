<?php

namespace App\Service\Admin;

use App\Models\TutorProfile;

class TutorService
{
    public function getAll()
    {
        return TutorProfile::all();
    }

    public function findById($tutorId)
    {
        return TutorProfile::with('user')->find($tutorId);
    }

    public function changeStatus($status, $tutorId)
    {
        // cap nhat trang thai ho so gia su
        TutorProfile::where('id', $tutorId)->update([
            'status' => $status,
        ]);
    }
}
