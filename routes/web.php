<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\CompetitionController;

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'loginAction'])->name('login.action');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
Route::resource('/', BlogController::class);
Route::middleware(['auth'])->group(function () {
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'registerAction'])->name('register.action');
    Route::get('/user', [UserController::class, 'edit'])->name('user');
    Route::post('/user', [UserController::class, 'update'])->name('user.update');
    Route::resource('/home', DashboardController::class);
    Route::resource('/students', StudentController::class);
    Route::resource('/lecturers', LecturerController::class);
    Route::resource('/notice', NoticeController::class);
    Route::resource('/events', EventController::class);
    Route::resource('/achievements', AchievementController::class);
    Route::resource('/competitions', CompetitionController::class);
    Route::resource('/services', ServiceController::class);
    Route::resource('/members', MemberController::class);
    Route::resource('/contacts', ContactController::class);
    Route::resource('/years', BatchController::class);
    Route::get('/calendar', [CalendarController::class, 'index']);
    Route::get('/settings', [SettingController::class, 'index']);
    Route::post('/settings/setting', [SettingController::class, 'updateSetting']);
    Route::get('/password', [UserController::class, 'password'])->name('password');
    Route::post('/password', [UserController::class, 'passwordAction'])->name('password.action');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});


