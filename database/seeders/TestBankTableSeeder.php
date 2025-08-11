<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TestBankTableSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks temporarily
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Clear existing tests
        DB::table('test_bank')->truncate();

        // Get all lesson IDs with their grade levels
        $lessons = DB::table('lessons')
            ->select('lesson_id', 'grade_level')
            ->get();

        // Test types and configurations
        $testTypes = [
            'multiple_choice' => [
                'duration' => '00:30:00',
                'points' => 100,
                'question_count' => 20
            ],
            'true_false' => [
                'duration' => '00:15:00',
                'points' => 50,
                'question_count' => 10
            ],
            'short_answer' => [
                'duration' => '00:45:00',
                'points' => 150,
                'question_count' => 5
            ],
            'essay' => [
                'duration' => '01:00:00',
                'points' => 200,
                'question_count' => 3
            ]
        ];

        $testTitles = [
            'Chapter Assessment',
            'Mid-Term Evaluation',
            'Final Exam',
            'Practice Test',
            'Concept Check',
            'Skills Test'
        ];

        $now = Carbon::now();
        $tests = [];

        foreach ($lessons as $lesson) {
            // Create 2-3 tests per lesson
            $testCount = rand(2, 3);
            $usedTypes = [];

            for ($i = 1; $i <= $testCount; $i++) {
                // Ensure unique test types per lesson
                $availableTypes = array_diff(array_keys($testTypes), $usedTypes);
                $type = $availableTypes[array_rand($availableTypes)];
                $usedTypes[] = $type;

                $config = $testTypes[$type];
                $title = "{$lesson->grade_level} - " . $testTitles[array_rand($testTitles)] . " {$i}";

                // Generate sample options and answers based on test type
                if ($type === 'multiple_choice') {
                    $options = json_encode([
                        'A' => 'Option A',
                        'B' => 'Option B',
                        'C' => 'Option C',
                        'D' => 'Option D'
                    ]);
                    $correctAnswer = json_encode(['B', 'D']); // Can be single or multiple
                } elseif ($type === 'true_false') {
                    $options = json_encode(['True', 'False']);
                    $correctAnswer = json_encode(['True']);
                } else {
                    $options = json_encode([]);
                    $correctAnswer = json_encode(['Varies by student response']);
                }

                $tests[] = [
                    'title' => $title,
                    'lesson_id' => $lesson->lesson_id,
                    'grade_level' => $lesson->grade_level,
                    'test_type' => $type,
                    'duration' => $config['duration'],
                    'total_points' => $config['points'],
                    'options' => $options,
                    'correct_answer' => $correctAnswer,
                    'created_at' => $now,
                    'updated_at' => $now
                ];
            }
        }

        DB::table('test_bank')->insert($tests);

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
