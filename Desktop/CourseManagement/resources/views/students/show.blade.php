@extends('layouts.app')
@section('title', 'Chi tiết sinh viên')
@section('content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h5 class="card-title mb-0">Thông tin chi tiết sinh viên</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Mã sinh viên:</strong> {{ $student->student_code }}</p>
                    <p><strong>Họ và tên:</strong> {{ $student->name }}</p>
                    <p><strong>Email:</strong> {{ $student->email }}</p>
                    <p><strong>Ngày sinh:</strong> {{ $student->date_of_birth }}</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('students.edit', $student) }}" class="btn btn-warning">Chỉnh sửa</a>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
</div>
@endsection
