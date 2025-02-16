@extends('layouts.app')
@section('title', 'Chi tiết giảng viên')
@section('content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0"><i class="fas fa-user"></i> Thông tin giảng viên</h5>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h5>Tên: {{ $teacher->name }}</h5>
                    <p>Email: {{ $teacher->email }}</p>
                    <p>Chuyên môn: {{ $teacher->specialization }}</p>
                </div>
            </div>

            <h5 class="mb-3">Các khóa học đang giảng dạy</h5>
            @if($teacher->courses->count() > 0)
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tên khóa học</th>
                                <th>Ngày bắt đầu</th>
                                <th>Ngày kết thúc</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teacher->courses as $course)
                            <tr>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->start_date }}</td>
                                <td>{{ $course->end_date }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-warning">Giảng viên này chưa được phân công giảng dạy khóa học nào.</div>
            @endif
        </div>
        <div class="card-footer">
            <a href="{{ route('teachers.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Quay lại</a>
        </div>
    </div>
</div>
@endsection
