<?php

namespace App\Service\Client;

use App\Models\Contact;

class ContactService
{
    public function add($request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);
    }
}
