<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher; // Import Teacher model
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::with('teacher')->get(); // Eager load the teacher relationship
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::all(); // Retrieve all teachers
        return view('courses.create', compact('teachers')); // Pass teachers to the view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'teacher_id' => 'required|exists:teachers,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        Course::create($request->all());

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id); // Find course by ID
        $teachers = Teacher::all(); // Get all teachers

        return view('courses.edit', compact('course', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'teacher_id' => 'required|exists:teachers,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $course->update($request->all());

        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
    public function getData()
{
    $draw = request()->input('draw', 1);

    $courses = Course::with('teacher:id,name')
        ->select('id', 'name', 'description', 'teacher_id', 'start_date', 'end_date')
        ->get();

    $courses->transform(function ($course) {
        return [
            'id' => $course->id,
            'name' => $course->name,
            'description' => $course->description,
            'teacher_name' => $course->teacher->name ?? 'N/A',
            'start_date' => $course->start_date,
            'end_date' => $course->end_date,
            'actions' => '<a href="' . route('courses.show', $course->id) . '" class="btn btn-sm btn-info">
                            <i class="fas fa-eye"></i> Xem</a>
                            <a href="' . route('courses.edit', $course->id) . '" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i> Sửa</a>
                            <form action="' . route('courses.destroy', $course->id) . '" method="POST" style="display:inline;">
                            ' . csrf_field() . method_field('DELETE') . '
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\')">
                            <i class="fas fa-trash-alt"></i> Xóa</button></form>'
        ];
    });

    return response()->json([
        "draw" => intval($draw),
        "recordsTotal" => $courses->count(),
        "recordsFiltered" => $courses->count(),
        "data" => $courses
    ]);
}

}
