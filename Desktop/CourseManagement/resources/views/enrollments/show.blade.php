@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col">
            <h1>Chi tiết đăng ký</h1>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Sinh viên:</label>
                        <p class="form-control-static">{{ $enrollment->student->name }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Khóa học:</label>
                        <p class="form-control-static">{{ $enrollment->course->name }}</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Ngày đăng ký:</label>
                        <p class="form-control-static">{{ $enrollment->enrollment_date }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Trạng thái:</label>
                        <p class="form-control-static">{{ $enrollment->status }}</p>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('enrollments.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Quay lại
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
