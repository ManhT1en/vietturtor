<?php

namespace App\Service\Admin;

use App\Models\Contact;

class FeedbackService
{
    public function getAll()
    {
        return Contact::all();
    }
    public function getFeedbackById($id)
    {
        return Contact::find($id);
    }
}
