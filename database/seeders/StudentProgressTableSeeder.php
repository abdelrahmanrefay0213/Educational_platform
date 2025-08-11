<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StudentProgressTableSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks temporarily
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Clear existing progress records
        DB::table('student_progress')->truncate();

        // Get all student and lesson IDs
        $studentIds = DB::table('students')->pluck('student_id')->toArray();
        $lessonIds = DB::table('lessons')->pluck('lesson_id')->toArray();

        $progressStatuses = [
            'in_progress',
            'completed',
            'not_started',
            'needs_review',
            'failed'
        ];

        $now = Carbon::now();
        $progressRecords = [];

        foreach ($studentIds as $studentId) {
            // Each student will have progress for 30-70% of lessons
            $lessonsToAssign = array_rand($lessonIds, rand(
                (int)(count($lessonIds) * 0.3),
                (int)(count($lessonIds) * 0.7)
            ));

            // Ensure array_rand returns an array even for single value
            if (!is_array($lessonsToAssign)) {
                $lessonsToAssign = [$lessonsToAssign];
            }

            foreach ($lessonsToAssign as $lessonKey) {
                $lessonId = $lessonIds[$lessonKey];
                $status = $progressStatuses[array_rand($progressStatuses)];

                // Generate realistic progress data based on status
                $videoProgress = 0;
                $videoCompletion = 0;
                $materialsViewed = 0;
                $score = null;
                $lastAccessed = null;

                if ($status !== 'not_started') {
                    $lastAccessed = $now->copy()->subDays(rand(0, 30));

                    if ($status === 'in_progress') {
                        $videoProgress = rand(1, 3);
                        $videoCompletion = rand(10, 75);
                        $materialsViewed = rand(0, 2);
                    } elseif ($status === 'completed') {
                        $videoProgress = 3; // Assuming 3 videos per lesson
                        $videoCompletion = 100;
                        $materialsViewed = rand(2, 5);
                        $score = rand(70, 100);
                    } elseif ($status === 'needs_review') {
                        $videoProgress = rand(2, 3);
                        $videoCompletion = rand(50, 90);
                        $materialsViewed = rand(1, 3);
                        $score = rand(50, 69);
                    } elseif ($status === 'failed') {
                        $videoProgress = rand(1, 3);
                        $videoCompletion = rand(30, 80);
                        $materialsViewed = rand(0, 2);
                        $score = rand(0, 49);
                    }
                }

                $progressRecords[] = [
                    'student_id' => $studentId,
                    'lesson_id' => $lessonId,
                    'score' => $score,
                    'status' => $status,
                    'video_progress' => $videoProgress,
                    'video_completion' => $videoCompletion,
                    'materials_viewed' => $materialsViewed,
                    'last_accessed' => $lastAccessed,
                    'created_at' => $now,
                    'updated_at' => $now
                ];
            }
        }

        DB::table('student_progress')->insert($progressRecords);

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
