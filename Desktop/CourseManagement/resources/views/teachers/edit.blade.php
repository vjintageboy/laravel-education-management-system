@extends('layouts.app')
@section('title', 'Chỉnh sửa giảng viên')
@section('content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-warning text-white">
            <h5 class="mb-0"><i class="fas fa-user-edit"></i> Chỉnh sửa thông tin giảng viên</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('teachers.update', $teacher) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Tên giảng viên</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $teacher->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $teacher->email }}" required>
                </div>
                <div class="mb-3">
                    <label for="specialization" class="form-label">Chuyên môn</label>
                    <input type="text" class="form-control" id="specialization" name="specialization" value="{{ $teacher->specialization }}" required>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Cập nhật</button>
                    <a href="{{ route('teachers.index') }}" class="btn btn-secondary"><i class="fas fa-times"></i> Hủy</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
