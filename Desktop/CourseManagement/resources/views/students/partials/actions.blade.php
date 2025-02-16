<div class="btn-group" role="group">
    <a href="{{ route('students.show', $student) }}" class="btn btn-info btn-sm" title="Xem chi tiết">
        <i class="fas fa-eye"></i>
    </a>
    <a href="{{ route('students.edit', $student) }}" class="btn btn-warning btn-sm" title="Chỉnh sửa">
        <i class="fas fa-edit"></i>
    </a>
    <form action="{{ route('students.destroy', $student) }}" method="POST" class="d-inline delete-form">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" title="Xóa" onclick="return confirm('Bạn có chắc chắn muốn xóa sinh viên này?')">
            <i class="fas fa-trash-alt"></i>
        </button>
    </form>
</div>
