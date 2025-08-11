<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks temporarily
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Clear existing questions
        DB::table('questions')->truncate();

        // Get all test IDs with their types
        $tests = DB::table('test_bank')
            ->select('test_id', 'test_type')
            ->get();

        $questionTemplates = [
            'multiple_choice' => [
                'What is the primary purpose of {concept}?',
                'Which of these best describes {term}?',
                'What would be the result of {scenario}?',
                'Identify the correct statement about {topic}'
            ],
            'true_false' => [
                '{statement} is true.',
                '{concept} works as described in the scenario.',
                'The following describes {topic} accurately: {statement}'
            ],
            'short_answer' => [
                'Briefly explain {concept}',
                'What are the three main components of {system}?',
                'Describe how {process} works in 2-3 sentences'
            ],
            'essay' => [
                'Discuss the significance of {concept} in {field}',
                'Compare and contrast {concept1} and {concept2}',
                'Analyze the impact of {event} on {outcome}'
            ]
        ];

        $concepts = [
            'photosynthesis',
            'the Pythagorean theorem',
            'Newton\'s laws',
            'the water cycle',
            'democracy',
            'supply and demand',
            'cellular respiration',
            'algebraic equations',
            'ancient civilizations'
        ];

        $now = Carbon::now();
        $questions = [];

        foreach ($tests as $test) {
            // Determine number of questions based on test type
            $questionCount = match ($test->test_type) {
                'multiple_choice' => rand(15, 20),
                'true_false' => rand(10, 15),
                'short_answer' => rand(5, 8),
                'essay' => rand(2, 4),
                default => 10
            };

            // Determine points per question (total 100 points distributed)
            $basePoints = (int)(100 / $questionCount);
            $extraPoints = 100 % $questionCount;

            for ($i = 1; $i <= $questionCount; $i++) {
                $template = $questionTemplates[$test->test_type][array_rand($questionTemplates[$test->test_type])];
                $concept = $concepts[array_rand($concepts)];

                $questionText = str_replace(
                    ['{concept}', '{term}', '{scenario}', '{topic}', '{statement}', '{field}', '{concept1}', '{concept2}', '{event}', '{outcome}', '{process}', '{system}'],
                    $concept,
                    $template
                );

                // Generate correct answer based on question type
                $correctAnswer = match ($test->test_type) {
                    'multiple_choice' => json_encode(['B']), // Single correct answer
                    'true_false' => json_encode(['True']),
                    'short_answer' => json_encode(['Sample short answer about ' . $concept]),
                    'essay' => json_encode(['Key points for essay about ' . $concept]),
                    default => json_encode([''])
                };

                // Distribute points with any remainder added to first questions
                $points = $basePoints + ($i <= $extraPoints ? 1 : 0);

                $questions[] = [
                    'test_id' => $test->test_id,
                    'question_text' => $questionText,
                    'points' => $points,
                    'question_order' => $i,
                    'correct_answer' => $correctAnswer,
                    'explanation' => $i % 3 === 0 ? 'Detailed explanation for the correct answer' : null,
                    'created_at' => $now,
                    'updated_at' => $now
                ];
            }
        }

        DB::table('questions')->insert($questions);

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
