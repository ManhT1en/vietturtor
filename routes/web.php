<?php

use App\Http\Controllers\Admin\TutorController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\client\CourseController;
use App\Http\Controllers\Client\FindTutorController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ListTutorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Client\TutorRegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('admin.dashboard.index');
// });
Route::prefix('/register')->group(function () {
    Route::get('/',[RegisterController::class,'index'])->name('register.index');
    Route::post('/new', [RegisterController::class,'register'])->name('register.register');
});

Route::prefix('/login')->group(function () {
    Route::get('/',[LoginController::class,'index'])->name('login.index');
    Route::post('/auth', [LoginController::class,'login'])->name('login.login');
});
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::prefix('admin')->group(function () {
    Route::prefix('tutor')->group(function () {
        Route::get('/', [TutorController::class, 'index'])->name('tutor.index');
        Route::get('profile/{tutorId}', [TutorController::class, 'getProfile'])->name('tutor.profile');
        Route::post('profile/{tutorId}', [TutorController::class, 'changeStatus'])->name('tutor.changeStatus');
    });
    Route::prefix('feedback')->group(function () {
        Route::get('/', [FeedbackController::class, 'index'])->name('feedback.index');
        Route::get('detail/{id}', [FeedbackController::class, 'show'])->name('feedback.show');
    });
});

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('tutor-register', [TutorRegisterController::class, 'showForm'])->name('tutorRegister.showForm');
    Route::get('tutor-register/success', function () {
        return view('client.register.TutorRegisterSuccess');
    })->name('tutor.register.success');
    Route::get('tutor-register/{province_id}', [TutorRegisterController::class, 'getDistricts']);
    Route::post('tutor-register/register', [TutorRegisterController::class, 'store'])->name('tutor.register.store');
});
Route::prefix('list-tutor')->group(function () {
    Route::get('/', [ListTutorController::class, 'index'])->name('list-tutor.index');
    Route::get('/{id}', [ListTutorController::class, 'findTutorById'])->where('id', '[0-9]+') ->name('list-tutor.show');
});
Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact.index');
    Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
});

Route::prefix('find-tutor')->group(function () {
    Route::get('/index', [FindTutorController::class, 'index'])->name('find-tutor.index');
    Route::post('/store', [FindTutorController::class, 'store'])->name('find-tutor.store');
    // Route::get('/add', [GameController::class, 'showAddGame'])->name('admin.game.show_add');
});

Route::prefix('course')->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('course.index');
});
