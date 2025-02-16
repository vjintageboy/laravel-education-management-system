@extends('layouts.app')
@section('title', 'Quản lý giảng viên')
@section('content')
<div class="container">
    <h1 class="mb-4">Quản lý giảng viên</h1>
    <a href="{{ route('teachers.create') }}" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Thêm giảng viên</a>
    
    <table id="teachersTable" class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Tên</th>
                <th>Email</th>
                <th>Chuyên môn</th>
                <th>Số khóa học</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->specialization }}</td>
                <td>{{ $teacher->courses_count }}</td>
                <td>
                    <a href="{{ route('teachers.show', $teacher) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('teachers.edit', $teacher) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('teachers.destroy', $teacher) }}" method="POST" class="d-inline delete-form">
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

@section('scripts')
<script>
    $(document).ready(function() {
        $('#teachersTable').DataTable({
            language: {
                search: "Tìm kiếm:",
                lengthMenu: "Hiển thị _MENU_ mục",
                info: "Hiển thị từ _START_ đến _END_ trong tổng số _TOTAL_ mục"
            }
        });
    });
</script>
@endsection
@endsection
