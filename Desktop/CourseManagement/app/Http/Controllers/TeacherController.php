<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::withCount('courses')->get();
        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers',
            'specialization' => 'required|string|max:255'
        ]);

        Teacher::create($validated);

        return redirect()->route('teachers.index')
            ->with('success', 'Giảng viên đã được thêm thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        $teacher->load('courses');
        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email,'.$teacher->id,
            'specialization' => 'required|string|max:255'
        ]);

        $teacher->update($validated);

        return redirect()->route('teachers.index')
            ->with('success', 'Thông tin giảng viên đã được cập nhật!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        if ($teacher->courses()->exists()) {
            return redirect()->route('teachers.index')
                ->with('error', 'Không thể xóa giảng viên vì đang có khóa học liên quan!');
        }

        $teacher->delete();
        
        return redirect()->route('teachers.index')
            ->with('success', 'Giảng viên đã được xóa thành công!');
    }
}
