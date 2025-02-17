<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [];
        for ($i = 1; $i <= 29; $i++) {
            $students[] = [
                'name' => 'Student ' . $i,
                'email' => 'student' . $i . '@example.com',
                'date_of_birth' => now()->subYears(rand(18, 25))->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        
        DB::table('students')->insert($students);
    }
}