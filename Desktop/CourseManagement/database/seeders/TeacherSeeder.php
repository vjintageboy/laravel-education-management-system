<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Teacher::firstOrCreate(['email' => 'nguyenvana@example.com'], ['name' => 'Nguyễn Văn A', 'specialization' => 'Toán học']);
        Teacher::firstOrCreate(['email' => 'tranthib@example.com'], ['name' => 'Trần Thị B', 'specialization' => 'Vật lý']);
        Teacher::firstOrCreate(['email' => 'phamvanc@example.com'], ['name' => 'Phạm Văn C', 'specialization' => 'Hóa học']);
        Teacher::firstOrCreate(['email' => 'lethid@example.com'], ['name' => 'Lê Thị D', 'specialization' => 'Sinh học']);
        Teacher::firstOrCreate(['email' => 'hoangvane@example.com'], ['name' => 'Hoàng Văn E', 'specialization' => 'Lịch sử']);
        Teacher::firstOrCreate(['email' => 'dangthif@example.com'], ['name' => 'Đặng Thị F', 'specialization' => 'Địa lý']);
        Teacher::firstOrCreate(['email' => 'buidang@example.com'], ['name' => 'Bùi Đăng G', 'specialization' => 'Văn học']);
        Teacher::firstOrCreate(['email' => 'dinhlan@example.com'], ['name' => 'Đinh Lan H', 'specialization' => 'Tiếng Anh']);
        Teacher::firstOrCreate(['email' => 'trinhhoai@example.com'], ['name' => 'Trịnh Hoài I', 'specialization' => 'Tiếng Pháp']);
        Teacher::firstOrCreate(['email' => 'vuhoang@example.com'], ['name' => 'Vũ Hoàng J', 'specialization' => 'Kinh tế']);
        Teacher::firstOrCreate(['email' => 'maianh@example.com'], ['name' => 'Mai Anh K', 'specialization' => 'Marketing']);
        Teacher::firstOrCreate(['email' => 'nguyenphuc@example.com'], ['name' => 'Nguyễn Phúc L', 'specialization' => 'Công nghệ thông tin']);
        Teacher::firstOrCreate(['email' => 'tranbinh@example.com'], ['name' => 'Trần Bình M', 'specialization' => 'Kỹ thuật phần mềm']);
        Teacher::firstOrCreate(['email' => 'phamquang@example.com'], ['name' => 'Phạm Quang N', 'specialization' => 'Mạng máy tính']);
        Teacher::firstOrCreate(['email' => 'ledinh@example.com'], ['name' => 'Lê Đình O', 'specialization' => 'Trí tuệ nhân tạo']);
        Teacher::firstOrCreate(['email' => 'hoangminh@example.com'], ['name' => 'Hoàng Minh P', 'specialization' => 'Khoa học dữ liệu']);
        Teacher::firstOrCreate(['email' => 'dangquoc@example.com'], ['name' => 'Đặng Quốc Q', 'specialization' => 'Thiết kế đồ họa']);
        Teacher::firstOrCreate(['email' => 'buitrung@example.com'], ['name' => 'Bùi Trung R', 'specialization' => 'Nhiếp ảnh']);
        Teacher::firstOrCreate(['email' => 'dinhthu@example.com'], ['name' => 'Đinh Thư S', 'specialization' => 'Thiết kế thời trang']);
        Teacher::firstOrCreate(['email' => 'trinhnhat@example.com'], ['name' => 'Trịnh Nhật T', 'specialization' => 'Âm nhạc']);
        Teacher::firstOrCreate(['email' => 'vukhanh@example.com'], ['name' => 'Vũ Khánh U', 'specialization' => 'Điện tử viễn thông']);
        Teacher::firstOrCreate(['email' => 'maihieu@example.com'], ['name' => 'Mai Hiếu V', 'specialization' => 'Cơ khí']);
        Teacher::firstOrCreate(['email' => 'nguyenduc@example.com'], ['name' => 'Nguyễn Đức W', 'specialization' => 'Xây dựng']);
        Teacher::firstOrCreate(['email' => 'trangia@example.com'], ['name' => 'Trần Gia X', 'specialization' => 'Kiến trúc']);
        Teacher::firstOrCreate(['email' => 'phamhai@example.com'], ['name' => 'Phạm Hải Y', 'specialization' => 'Luật']);
        Teacher::firstOrCreate(['email' => 'leduong@example.com'], ['name' => 'Lê Dương Z', 'specialization' => 'Y học']);
        Teacher::firstOrCreate(['email' => 'hoanglong@example.com'], ['name' => 'Hoàng Long AA', 'specialization' => 'Dược học']);
        Teacher::firstOrCreate(['email' => 'danghoa@example.com'], ['name' => 'Đặng Hoa BB', 'specialization' => 'Tâm lý học']);
        Teacher::firstOrCreate(['email' => 'buimanh@example.com'], ['name' => 'Bùi Mạnh CC', 'specialization' => 'Quản trị kinh doanh']);
        Teacher::firstOrCreate(['email' => '1buimanh@example.com'], ['name' => '1Bùi Mạnh CC', 'specialization' => 'Quản trị kinh doanh']);
    }
}
