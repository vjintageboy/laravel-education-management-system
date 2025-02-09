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
        Course::create(['name' => 'Mathematics 101', 'description' => 'Introduction to Mathematics', 'teacher_id' => 1, 'start_date' => '2023-09-01', 'end_date' => '2023-12-15']);
        Course::create(['name' => 'Science 101', 'description' => 'Introduction to Science', 'teacher_id' => 2, 'start_date' => '2023-09-01', 'end_date' => '2023-12-15']);
        Course::create(['name' => 'History 101', 'description' => 'Introduction to History', 'teacher_id' => 3, 'start_date' => '2023-09-01', 'end_date' => '2023-12-15']);
    }
}
