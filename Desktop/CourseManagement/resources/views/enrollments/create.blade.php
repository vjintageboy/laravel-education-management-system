@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col">
            <h1>Tạo đăng ký mới</h1>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('enrollments.store') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="student_id">Sinh viên</label>
                    <select name="student_id" id="student_id" class="form-control" required>
                        <option value="">Chọn sinh viên</option>
                        @foreach($students as $student)
                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="course_id">Khóa học</label>
                    <select name="course_id" id="course_id" class="form-control" required>
                        <option value="">Chọn khóa học</option>
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="enrollment_date">Ngày đăng ký</label>
                    <input type="date" name="enrollment_date" id="enrollment_date" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="status">Trạng thái</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="Đang chờ">Đang chờ</option>
                        <option value="Đã xác nhận">Đã xác nhận</option>
                        <option value="Đã hủy">Đã hủy</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Tạo đăng ký</button>
                <a href="{{ route('enrollments.index') }}" class="btn btn-secondary">Hủy bỏ</a>
            </form>
        </div>
    </div>
</div>
@endsection
