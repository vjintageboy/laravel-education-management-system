@extends('layouts.app')

@section('title', 'Thêm khóa học')

@section('content')
<div class="container">
    <h1>Thêm khóa học mới</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Tên khóa học</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nhập tên khóa học">
            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Nhập mô tả khóa học"></textarea>
            @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="teacher_id" class="form-label">Giảng viên</label>
            <select class="form-control" id="teacher_id" name="teacher_id">
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="start_date" class="form-label">Ngày bắt đầu</label>
            <input type="date" class="form-control" id="start_date" name="start_date">
        </div>
        <div class="mb-3">
            <label for="end_date" class="form-label">Ngày kết thúc</label>
            <input type="date" class="form-control" id="end_date" name="end_date">
        </div>
        <button type="submit" class="btn btn-primary">Thêm khóa học</button>
    </form>
</div>
@endsection
