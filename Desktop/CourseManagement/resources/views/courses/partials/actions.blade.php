<td>
    <!-- Nút Xem -->
    <a href="{{ route('courses.show', $course->id) }}" class="btn btn-sm btn-info">Xem</a>

    <!-- Nút Sửa -->
    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-sm btn-warning">Sửa</a>

    <!-- Nút Xóa với xác nhận -->
    <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">
            Xóa
        </button>
    </form>
</td>
