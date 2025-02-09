@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Course Details</h1>
    <h2>{{ $course->name }}</h2>
    <p><strong>Description:</strong> {{ $course->description }}</p>
    <p><strong>Teacher:</strong> {{ $course->teacher->name }}</p>
    <p><strong>Start Date:</strong> {{ $course->start_date }}</p>
    <p><strong>End Date:</strong> {{ $course->end_date }}</p>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to Courses</a>
</div>
@endsection
