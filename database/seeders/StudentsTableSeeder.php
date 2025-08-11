<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Clear the table
        DB::table('students')->truncate();

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $students = [
            [
                'student_name' => 'Ahmed Mohamed',
                'email' => 'ahmed@example.com',
                'password' => Hash::make('password123'),
                'phone_number' => '01012345678',
                'parents_phone' => '01087654321',
                'grade_level' => '10',
                'last_login' => Carbon::now()->subDays(2),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_name' => 'Fatima Ali',
                'email' => 'fatima@example.com',
                'password' => Hash::make('password123'),
                'phone_number' => '01123456789',
                'parents_phone' => '01198765432',
                'grade_level' => '11',
                'last_login' => Carbon::now()->subWeek(),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_name' => 'Omar Hassan',
                'email' => 'omar@example.com',
                'password' => Hash::make('password123'),
                'phone_number' => '01234567890',
                'parents_phone' => null, // Explicitly set to null
                'grade_level' => '9',
                'last_login' => null,
                'is_active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('students')->insert($students);
    }
}