<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\Admin\FeedbackService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FeedbackController extends Controller
{
    protected $feedbackService;
    public function __construct(FeedbackService $feedbackService)
    {
        $this->feedbackService = $feedbackService;
    }
    public function index()
    {
        $listFeedback = $this->feedbackService->getAll();
        return view('admin.contact.index', compact('listFeedback'));
    }
    public function show($id)
    {
        $feedback = $this->feedbackService->getFeedBackById($id);
        return view('admin.contact.detail', compact('feedback'));
    }
}
