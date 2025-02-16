<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/courses/data', [CourseController::class, 'getData'])->name('courses.data');

// Bảo vệ route courses, yêu cầu đăng nhập trước khi truy cập
Route::middleware('auth')->group(function () {
    Route::resource('courses', CourseController::class);
});

Route::get('/', function () {
    return redirect()->route('courses.index'); 
})->middleware('auth'); // Chỉ cho phép truy cập nếu đã đăng nhập

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
