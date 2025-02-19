<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Service\Client\ContactService;
use Illuminate\Http\Request;
use Exception;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function index()
    {
        return view('client.contact.index');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => ['required'],
                'email' => ['required', 'string', 'email:rfc'],
                'message' => ['required']
            ],
            [
                'name.required' => 'Tên không được để trống',
                'email.required' => 'Email không được để trống',
                'email.email' => 'Email không đúng định dạng',
                'message.required' => 'Nội dung liên hệ không được để trống'
            ]
        );

        try {
            $this->contactService->add($request);
            return redirect()->route('contact.index')->with('success', 'Đã được gửi thành công!');
        } catch (Exception $e) {
            return redirect()->route('contact.index')->with('error', 'Gửi thất bại. Vui lòng thử lại.');
        }
    }
}
