<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Student::create(['name' => 'Alice Brown', 'email' => 'alice@example.com', 'date_of_birth' => '2000-01-15']);
        Student::create(['name' => 'Bob White', 'email' => 'bob@example.com', 'date_of_birth' => '1999-05-22']);
        Student::create(['name' => 'Charlie Green', 'email' => 'charlie@example.com', 'date_of_birth' => '2001-09-30']);
    }
}
