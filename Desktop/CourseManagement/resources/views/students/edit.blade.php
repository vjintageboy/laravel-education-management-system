@extends('layouts.app')
@section('title', 'Chỉnh sửa thông tin sinh viên')
@section('content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-warning text-white">
            <h5 class="card-title mb-0">Chỉnh sửa thông tin sinh viên</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('students.update', $student) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="student_code" class="form-label">Mã sinh viên</label>
                    <input type="text" class="form-control" id="student_code" name="student_code" value="{{ $student->student_code }}" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}" required>
                </div>
                <div class="mb-3">
                    <label for="date_of_birth" class="form-label">Ngày sinh</label>
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ $student->date_of_birth }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Hủy bỏ</a>
            </form>
        </div>
    </div>
</div>
@endsection
