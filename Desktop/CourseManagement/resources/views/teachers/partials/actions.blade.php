<div class="d-flex gap-2">
    <a href="{{ route('teachers.show', $teacher) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
    <a href="{{ route('teachers.edit', $teacher) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
    <form action="{{ route('teachers.destroy', $teacher) }}" method="POST" class="d-inline delete-form">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
    </form>
</div>
