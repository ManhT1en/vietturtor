<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\Admin\TutorService;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    protected $tutorService;
    public function __construct(TutorService $tutorService)
    {
        $this->tutorService = $tutorService;
    }

    public function index()
    {
        $listTutor = $this->tutorService->getAll();
        return view('admin.tutor.index', compact('listTutor'));
    }

    public function getProfile($tutorId)
    {
        $tutor = $this->tutorService->findById($tutorId);
        $province = \Kjmtrue\VietnamZone\Models\Province::find($tutor->area);
        return view('admin.tutor.profile', compact('tutor', 'province'));
    }

    public function changeStatus(Request $request, $tutorId)
    {
        $this->tutorService->changeStatus($request->input('status'), $tutorId);

        return redirect()->route('tutor.index');
    }
}
