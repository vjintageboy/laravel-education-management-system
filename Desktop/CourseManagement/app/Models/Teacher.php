<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    // Cho phép điền dữ liệu vào các cột này
    protected $fillable = ['name', 'email', 'specialization'];

    // Một giảng viên có thể dạy nhiều khóa học
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
