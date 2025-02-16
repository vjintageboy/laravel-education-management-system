@extends('layouts.app')
@section('title', 'Quản lý sinh viên')
@section('content')
<div class="container">
    <h1 class="mb-4">Quản lý sinh viên</h1>
    <a href="{{ route('students.create') }}" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Thêm sinh viên</a>
    
    <table id="studentsTable" class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Mã sinh viên</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Ngày sinh</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->student_code }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->date_of_birth }}</td>
                <td>
                    <a href="{{ route('students.show', $student) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('students.edit', $student) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('students.destroy', $student) }}" method="POST" class="d-inline delete-form">
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
        $('#studentsTable').DataTable({
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
