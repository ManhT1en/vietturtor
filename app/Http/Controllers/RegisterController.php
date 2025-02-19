<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Service\Client\RegisterService;

class RegisterController extends Controller
{
    private $registerService;
    public function __construct(RegisterService $registerService) {
        $this->registerService = $registerService;
    }
    public function index() {
       return $this->registerService->index();
    }
    public function register(RegisterRequest $request) {
        return $this->registerService->register($request);
    }
} 
