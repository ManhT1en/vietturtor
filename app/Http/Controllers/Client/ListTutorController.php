<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Service\Admin\TutorService;
use App\Service\Client\ListTutorService;
use Illuminate\Http\Request;

class ListTutorController extends Controller
{
    protected $listTutorService;
    // protected $tutor;
    public function __construct(ListTutorService $listTutorService) {
        $this->listTutorService = $listTutorService;
    }
    public function index() {
        $listTutor = $this->listTutorService->getFullProfile();      
        // dd($listTutor);
        return view('client.ListTutor.list-tutor', compact('listTutor'));
    }
    public function findTutorById( $id) {
        $id = (int) $id;
        $tutor=$this->listTutorService->getTutorByTutorId($id);
        $certificates=$this->listTutorService->getCertificatesTutor($tutor->first()->id);
        $reviewers=$this->listTutorService->getReviewsByTutorId($tutor->first()->id);
        return view('client.ListTutor.tutor-details', compact(['tutor','certificates','reviewers']));
    }
}
