<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::resource('courses', CourseController::class);

Route::get('/', function () {
    return redirect()->route('courses.index'); // Chuyển hướng đến danh sách khóa học
});
   