@extends('layouts.app')

@section('title', 'Quản lý khóa học')

@section('content')
<div class="container">
    <h1 class="mb-4">Quản lý khóa học</h1>
    <a href="{{ route('courses.create') }}" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Thêm khóa học</a>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Tên khóa học</th>
                <th>Mô tả</th>
                <th>Giảng viên</th>
                <th>Ngày bắt đầu</th>
                <th>Ngày kết thúc</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
            <tr>
                <td>{{ $course->name }}</td>
                <td>{{ Str::limit($course->description, 50) }}</td>
                <td>{{ $course->teacher->name }}</td>
                <td>{{ $course->start_date }}</td>
                <td>{{ $course->end_date }}</td>
                <td>
                    <a href="{{ route('courses.show', $course) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('courses.destroy', $course) }}" method="POST" class="d-inline delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
