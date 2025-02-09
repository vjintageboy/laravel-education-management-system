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
        Teacher::firstOrCreate(['email' => 'john@example.com'], ['name' => 'John Doe', 'specialization' => 'Mathematics']);
        Teacher::firstOrCreate(['email' => 'jane@example.com'], ['name' => 'Jane Smith', 'specialization' => 'Science']);
        Teacher::firstOrCreate(['email' => 'emily@example.com'], ['name' => 'Emily Johnson', 'specialization' => 'History']);
    }
}
