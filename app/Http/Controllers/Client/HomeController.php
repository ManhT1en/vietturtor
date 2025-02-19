<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Service\Client\HomeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $homeService;
    public function __construct(HomeService $homeService)
    {
        $this->homeService = $homeService;
    }

    public function index()
    {
        $listTutor = $this->homeService->get4Tutor();
        return view('client.home.index', compact('listTutor'));
    }
}
