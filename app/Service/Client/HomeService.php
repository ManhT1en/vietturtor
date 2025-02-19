<?php

namespace App\Service\Client;

use App\Models\TutorProfile;

class HomeService
{
    public function get4Tutor()
    {
        return TutorProfile::with('user')->limit(4)->get();
    }
}
