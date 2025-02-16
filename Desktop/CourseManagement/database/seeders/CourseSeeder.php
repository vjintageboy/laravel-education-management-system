<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $courses = [
            ['name' => 'Toán học cơ bản', 'description' => 'Khóa học về toán học cơ bản', 'teacher_id' => 1],
            ['name' => 'Vật lý nhập môn', 'description' => 'Giới thiệu về vật lý căn bản', 'teacher_id' => 2],
            ['name' => 'Hóa học đại cương', 'description' => 'Các khái niệm quan trọng trong hóa học', 'teacher_id' => 3],
            ['name' => 'Lịch sử Việt Nam', 'description' => 'Khám phá lịch sử Việt Nam qua các thời kỳ', 'teacher_id' => 4],
            ['name' => 'Văn học hiện đại', 'description' => 'Tìm hiểu các tác phẩm văn học nổi bật', 'teacher_id' => 5],
            ['name' => 'Tiếng Anh giao tiếp', 'description' => 'Khóa học giúp bạn nâng cao kỹ năng giao tiếp', 'teacher_id' => 6],
            ['name' => 'Lập trình Python', 'description' => 'Nhập môn lập trình với Python', 'teacher_id' => 7],
            ['name' => 'Phát triển web với Laravel', 'description' => 'Xây dựng ứng dụng web bằng Laravel', 'teacher_id' => 8],
            ['name' => 'Trí tuệ nhân tạo', 'description' => 'Khám phá AI và ứng dụng thực tế', 'teacher_id' => 9],
            ['name' => 'Xử lý ảnh với OpenCV', 'description' => 'Làm việc với ảnh số bằng OpenCV', 'teacher_id' => 10],
            ['name' => 'SQL và cơ sở dữ liệu', 'description' => 'Làm việc với hệ quản trị cơ sở dữ liệu', 'teacher_id' => 11],
            ['name' => 'Phát triển ứng dụng di động', 'description' => 'Học cách xây dựng app Android & iOS', 'teacher_id' => 12],
            ['name' => 'Marketing kỹ thuật số', 'description' => 'Chiến lược marketing trong thời đại số', 'teacher_id' => 13],
            ['name' => 'Kinh tế vi mô', 'description' => 'Khám phá nguyên lý kinh tế vi mô', 'teacher_id' => 14],
            ['name' => 'Thiết kế UI/UX', 'description' => 'Nguyên tắc thiết kế trải nghiệm người dùng', 'teacher_id' => 15],
            ['name' => 'An toàn thông tin', 'description' => 'Những kiến thức cơ bản về bảo mật', 'teacher_id' => 16],
            ['name' => 'Machine Learning', 'description' => 'Nhập môn học máy và thuật toán', 'teacher_id' => 17],
            ['name' => 'Phát triển game với Unity', 'description' => 'Tạo game với Unity Engine', 'teacher_id' => 18],
            ['name' => 'Quản lý dự án Agile', 'description' => 'Cách quản lý dự án theo mô hình Agile', 'teacher_id' => 19],
            ['name' => 'Blockchain và tiền mã hóa', 'description' => 'Giới thiệu công nghệ blockchain', 'teacher_id' => 20],
            ['name' => 'Phân tích dữ liệu với R', 'description' => 'Xử lý và phân tích dữ liệu bằng R', 'teacher_id' => 21],
            ['name' => 'Thương mại điện tử', 'description' => 'Xây dựng và vận hành một website bán hàng', 'teacher_id' => 22],
            ['name' => 'Kỹ thuật lập trình C++', 'description' => 'Khóa học lập trình C++ từ cơ bản đến nâng cao', 'teacher_id' => 23],
            ['name' => 'Tư duy lập trình', 'description' => 'Cách giải quyết vấn đề trong lập trình', 'teacher_id' => 24],
            ['name' => 'Khoa học dữ liệu', 'description' => 'Làm việc với dữ liệu lớn và phân tích', 'teacher_id' => 25],
            ['name' => 'Kỹ năng mềm', 'description' => 'Cải thiện giao tiếp và làm việc nhóm', 'teacher_id' => 26],
            ['name' => 'Phát triển Backend với Node.js', 'description' => 'Xây dựng API với Node.js', 'teacher_id' => 27],
            ['name' => 'Phát triển Frontend với React.js', 'description' => 'Học cách tạo ứng dụng web với React', 'teacher_id' => 28],
            ['name' => 'Điện tử cơ bản', 'description' => 'Giới thiệu nguyên lý điện tử', 'teacher_id' => 29],
            ['name' => 'Truyền thông số', 'description' => 'Các kỹ thuật truyền thông trong kỷ nguyên số', 'teacher_id' => 30],
        ];

        foreach ($courses as $course) {
            Course::create(array_merge($course, [
                'start_date' => '2024-09-01',
                'end_date' => '2024-12-15',
            ]));
        }
    }
}
