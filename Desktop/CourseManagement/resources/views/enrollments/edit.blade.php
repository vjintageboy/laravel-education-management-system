@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col">
            <h1>Sửa đăng ký</h1>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('enrollments.update', $enrollment->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="student_id">Sinh viên</label>
                    <select name="student_id" id="student_id" class="form-control" required>
                        @foreach($students as $student)
                            <option value="{{ $student->id }}" {{ $enrollment->student_id == $student->id ? 'selected' : '' }}>
                                {{ $student->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="course_id">Khóa học</label>
                    <select name="course_id" id="course_id" class="form-control" required>
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}" {{ $enrollment->course_id == $course->id ? 'selected' : '' }}>
                                {{ $course->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="enrollment_date">Ngày đăng ký</label>
                    <input type="date" name="enrollment_date" id="enrollment_date" 
                           class="form-control" value="{{ $enrollment->enrollment_date }}" required>
                </div>

                <div class="form-group">
                    <label for="status">Trạng thái</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="Đang chờ" {{ $enrollment->status == 'Đang chờ' ? 'selected' : '' }}>Đang chờ</option>
                        <option value="Đã xác nhận" {{ $enrollment->status == 'Đã xác nhận' ? 'selected' : '' }}>Đã xác nhận</option>
                        <option value="Đã hủy" {{ $enrollment->status == 'Đã hủy' ? 'selected' : '' }}>Đã hủy</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="{{ route('enrollments.index') }}" class="btn btn-secondary">Hủy bỏ</a>
            </form>
        </div>
    </div>
</div>
@endsection
