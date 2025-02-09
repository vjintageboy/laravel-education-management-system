@extends('layouts.app')

@section('title', 'Chỉnh sửa khóa học')

@section('content')
<div class="container">
    <h1>Chỉnh sửa khóa học</h1>
    <form action="{{ route('courses.update', $course) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Tên khóa học</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $course->name }}" required>
            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" required>{{ $course->description }}</textarea>
            @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="teacher_id" class="form-label">Giảng viên</label>
            <select class="form-control" id="teacher_id" name="teacher_id" required>
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id }}" {{ $teacher->id == $course->teacher_id ? 'selected' : '' }}>{{ $teacher->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="start_date" class="form-label">Ngày bắt đầu</label>
            <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date" value="{{ $course->start_date }}" required>
            @error('start_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="end_date" class="form-label">Ngày kết thúc</label>
            <input type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date" value="{{ $course->end_date }}" required>
            @error('end_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Cập nhật khóa học</button>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Quay lại</a>
    </form>
</div>
@endsection
