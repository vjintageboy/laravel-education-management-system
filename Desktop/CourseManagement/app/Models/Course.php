<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Chỉ định các cột có thể điền dữ liệu
    protected $fillable = ['name', 'description', 'teacher_id', 'start_date', 'end_date'];

    // Thiết lập quan hệ: Mỗi khóa học thuộc về một giảng viên
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
