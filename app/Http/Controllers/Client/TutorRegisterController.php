<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Service\Client\TutorRegisterService;
use Illuminate\Http\Request;

class TutorRegisterController extends Controller
{
    protected $tutorRegisterService;

    public function __construct(TutorRegisterService $tutorRegisterService)
    {
        $this->tutorRegisterService = $tutorRegisterService;
    }

    public function showForm()
    {
        $provinces = $this->tutorRegisterService->getProvinces();
        $user = $this->tutorRegisterService->getUser();

        return view('client.register.TutorRegister', compact('provinces', 'user'));
    }

    public function getDistricts($province_id)
    {
        $districts = $this->tutorRegisterService->getDistricts($province_id);
        return response()->json($districts);
    }

    public function store(Request $request)
    {
        // $userId = auth()->id(); // Lấy ID người dùng đăng nhập
        $userId = 1; // Vì chưa có chức năng đăng nhập nên xài tạm userId = 1 để test
        $tutorProfile = $this->tutorRegisterService->register($request->all(), $userId);

        return redirect()->route('tutor.register.success');
    }
}
