@extends('layouts.app')

@section('title', 'Chi tiết khóa học')

@section('content')
<div class="container">
    <h1>{{ $course->name }}</h1>
    <p><strong>Mô tả:</strong> {{ $course->description }}</p>
    <p><strong>Giảng viên:</strong> {{ $course->teacher->name }}</p>
    <p><strong>Ngày bắt đầu:</strong> {{ $course->start_date }}</p>
    <p><strong>Ngày kết thúc:</strong> {{ $course->end_date }}</p>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Quay lại</a>
</div>
@endsection
