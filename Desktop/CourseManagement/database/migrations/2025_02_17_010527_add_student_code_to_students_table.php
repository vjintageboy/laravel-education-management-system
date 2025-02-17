<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('student_code')->nullable()->after('id'); // Không có unique()
        });
    
        // Cập nhật giá trị cho cột mới tránh lỗi trùng lặp
        DB::statement("UPDATE students SET student_code = CONCAT('SC', id) WHERE student_code IS NULL");
    
        // Thêm unique constraint sau khi đã cập nhật dữ liệu
        Schema::table('students', function (Blueprint $table) {
            $table->unique('student_code');
        });
    }
    
};
