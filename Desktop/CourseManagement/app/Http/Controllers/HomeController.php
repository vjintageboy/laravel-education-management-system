<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Enrollment;

class HomeController extends Controller
{
    public function index()
    {
        $studentCount = Student::count();
        $teacherCount = Teacher::count();
        $courseCount = Course::count();
        $enrollmentCount = Enrollment::count();

        return view('home', compact('studentCount', 'teacherCount', 'courseCount', 'enrollmentCount'));
    }
}
