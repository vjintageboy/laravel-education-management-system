@extends('layouts.app')

@section('title', 'Chi tiết khóa học')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">{{ $course->name }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Mô tả:</strong> {{ $course->description }}</p>
            <p><strong>Giảng viên:</strong> {{ $course->teacher->name }}</p>
            <p><strong>Ngày bắt đầu:</strong> {{ date('d/m/Y', strtotime($course->start_date)) }}</p>
            <p><strong>Ngày kết thúc:</strong> {{ date('d/m/Y', strtotime($course->end_date)) }}</p>
            
            <!-- Hiển thị trạng thái khóa học -->
            <p><strong>Trạng thái:</strong> 
                @if(now() < $course->start_date)
                    <span class="badge bg-secondary">Sắp diễn ra</span>
                @elseif(now() > $course->end_date)
                    <span class="badge bg-danger">Đã kết thúc</span>
                @else
                    <span class="badge bg-success">Đang diễn ra</span>
                @endif
            </p>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('courses.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Quay lại
            </a>
            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Sửa
            </a>
            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa khóa học này?')">
                    <i class="fas fa-trash-alt"></i> Xóa
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
