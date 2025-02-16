@extends('layouts.app')
@section('title', 'Thêm giảng viên')
@section('content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><i class="fas fa-user-plus"></i> Thêm giảng viên mới</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('teachers.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Tên giảng viên</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="specialization" class="form-label">Chuyên môn</label>
                    <input type="text" class="form-control" id="specialization" name="specialization" required>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Lưu</button>
                    <a href="{{ route('teachers.index') }}" class="btn btn-secondary"><i class="fas fa-times"></i> Hủy</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
