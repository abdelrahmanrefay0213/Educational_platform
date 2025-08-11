<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnswerChoicesTableSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks temporarily
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Clear existing answer choices
        DB::table('answer_choices')->truncate();

        // Get all multiple choice questions
        $questions = DB::table('questions')
            ->join('test_bank', 'questions.test_id', '=', 'test_bank.test_id')
            ->where('test_bank.test_type', 'multiple_choice')
            ->select('questions.question_id', 'questions.correct_answer')
            ->get();

        $choicePrefixes = ['A', 'B', 'C', 'D'];
        $distractors = [
            'This is incorrect because...',
            'A common misconception is...',
            'This might seem correct but...',
            'Partially correct but...',
            'Not the best answer because...'
        ];

        $now = Carbon::now();
        $choices = [];

        foreach ($questions as $question) {
            $correctAnswers = json_decode($question->correct_answer);
            $numChoices = count($choicePrefixes);
            $correctIndices = array_map(function ($ans) use ($choicePrefixes) {
                return array_search($ans, $choicePrefixes);
            }, $correctAnswers);

            for ($i = 0; $i < $numChoices; $i++) {
                $isCorrect = in_array($i, $correctIndices);

                if ($isCorrect) {
                    $choiceText = "This is the correct answer because it matches the expected outcome.";
                } else {
                    $distractor = $distractors[array_rand($distractors)];
                    $choiceText = $distractor . " The correct answer is actually " . implode(' or ', $correctAnswers) . ".";
                }

                $choices[] = [
                    'question_id' => $question->question_id,
                    'choice_text' => "{$choicePrefixes[$i]}. $choiceText",
                    'is_correct' => $isCorrect,
                    'choice_order' => $i + 1,
                    'created_at' => $now,
                    'updated_at' => $now
                ];
            }
        }

        DB::table('answer_choices')->insert($choices);

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
