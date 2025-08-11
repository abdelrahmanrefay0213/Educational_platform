<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LessonsTableSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks to avoid constraints during seeding
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        // Clear the table first
        DB::table('lessons')->truncate();

        // Sample subjects by grade level
        $gradeSubjects = [
            '9' => ['Algebra', 'Geometry', 'Biology', 'Chemistry', 'Physics'],
            '10' => ['Trigonometry', 'Calculus', 'World History', 'Literature', 'Geography'],
            '11' => ['Advanced Math', 'Economics', 'Philosophy', 'Computer Science', 'Psychology'],
            '12' => ['Statistics', 'Government', 'Business', 'Advanced Biology', 'Art History']
        ];

        $lessons = [];
        $now = Carbon::now();

        // Generate lessons for each grade level
        foreach ($gradeSubjects as $grade => $subjects) {
            $chapter = 1;
            $lessonOrder = 1;
            
            foreach ($subjects as $subject) {
                // 3-5 lessons per chapter
                $lessonCount = rand(3, 5);
                
                for ($i = 1; $i <= $lessonCount; $i++) {
                    $lessons[] = [
                        'title' => "$subject - Chapter $chapter, Lesson $i",
                        'grade_level' => $grade,
                        'chapter_number' => $chapter,
                        'lesson_order' => $lessonOrder++,
                        'is_active' => true,
                        'created_at' => $now,
                        'updated_at' => $now
                    ];
                }
                
                $chapter++;
            }
        }

        // Insert inactive demo lessons
        $lessons[] = [
            'title' => 'Demo Lesson - Inactive Example',
            'grade_level' => '9',
            'chapter_number' => 99,
            'lesson_order' => 999,
            'is_active' => false,
            'created_at' => $now,
            'updated_at' => $now
        ];

        DB::table('lessons')->insert($lessons);
        
        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}