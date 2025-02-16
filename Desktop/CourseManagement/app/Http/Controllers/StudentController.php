<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_code' => 'required|string|max:255|unique:students',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            'date_of_birth' => 'required|date'
        ]);

        Student::create($validated);

        return redirect()->route('students.index')
            ->with('success', 'Sinh viên đã được thêm thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'student_code' => 'required|string|max:255|unique:students,student_code,'.$student->id,
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,'.$student->id,
            'date_of_birth' => 'required|date'
        ]);

        $student->update($validated);

        return redirect()->route('students.index')
            ->with('success', 'Thông tin sinh viên đã được cập nhật!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')
            ->with('success', 'Sinh viên đã được xóa thành công!');
    }
}
