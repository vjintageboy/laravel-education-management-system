<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;

Route::get('/courses/data', [CourseController::class, 'getData'])->name('courses.data');


Route::get('/', function () {
    return view('home'); // Hoặc return view('home');
})->name('home');

// Bảo vệ route courses, yêu cầu đăng nhập trước khi truy cập
Route::middleware('auth')->group(function () {
    Route::resource('courses', CourseController::class);
    Route::resource('teachers', TeacherController::class);
    Route::resource('students', StudentController::class);
});

Route::get('/', [HomeController::class, 'index'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
