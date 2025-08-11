<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StudentAnswersTableSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks temporarily
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Clear existing student answers
        DB::table('student_answers')->truncate();

        // Get all test attempts with their test_id and student_id
        $attempts = DB::table('test_attempts')
            ->join('test_bank', 'test_attempts.test_id', '=', 'test_bank.test_id')
            ->select('test_attempts.attempt_id', 'test_attempts.test_id', 'test_attempts.student_id', 'test_attempts.score', 'test_bank.test_type')
            ->get();

        $now = Carbon::now();
        $answers = [];

        foreach ($attempts as $attempt) {
            // Get all questions for this test
            $questions = DB::table('questions')
                ->where('test_id', $attempt->test_id)
                ->get();

            $totalPossiblePoints = $questions->sum('points');
            $pointsRemaining = $attempt->score;

            foreach ($questions as $question) {
                $percentageOfTotal = $question->points / $totalPossiblePoints;
                $pointsEarned = min(
                    $question->points,
                    (int)round($attempt->score * $percentageOfTotal)
                );

                // Adjust to ensure we don't allocate more points than the attempt's total score
                $pointsEarned = min($pointsEarned, $pointsRemaining);
                $pointsRemaining -= $pointsEarned;

                // For the last question, assign any remaining points
                if ($question === $questions->last() && $pointsRemaining > 0) {
                    $pointsEarned += $pointsRemaining;
                    $pointsRemaining = 0;
                }

                $isCorrect = $pointsEarned >= ($question->points * 0.5);
                $correctAnswer = json_decode($question->correct_answer, true);

                // Generate student answer based on question type
                $answer = $this->generateStudentAnswer(
                    $attempt->test_type,
                    $correctAnswer,
                    $isCorrect
                );

                // 20% chance of teacher feedback for incorrect answers
                $teacherFeedback = (!$isCorrect && rand(1, 5) === 1)
                    ? $this->generateFeedback($question, $correctAnswer, $answer)
                    : null;

                $answers[] = [
                    'attempt_id' => $attempt->attempt_id,
                    'question_id' => $question->question_id,
                    'answer' => is_array($answer) ? json_encode($answer) : $answer,
                    'is_correct' => $isCorrect,
                    'points_earned' => $pointsEarned,
                    'teacher_feedback' => $teacherFeedback,
                    'answered_at' => $now->copy()->subMinutes(rand(0, 60)),
                    'created_at' => $now,
                    'updated_at' => $now
                ];
            }
        }

        DB::table('student_answers')->insert($answers);

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    protected function generateStudentAnswer(string $testType, array $correctAnswer, bool $isCorrect)
    {
        switch ($testType) {
            case 'multiple_choice':
                if ($isCorrect) {
                    return $correctAnswer;
                }
                // Return 1-2 wrong answers
                $wrongChoices = array_diff(['A', 'B', 'C', 'D'], $correctAnswer);
                shuffle($wrongChoices);
                return array_slice($wrongChoices, 0, rand(1, 2));

            case 'true_false':
                return $isCorrect ? $correctAnswer : [current($correctAnswer) === 'True' ? 'False' : 'True'];

            case 'short_answer':
                return $isCorrect
                    ? "A correct answer about the topic"
                    : "A partially correct but incomplete answer";

            case 'essay':
                return $isCorrect
                    ? "A well-structured essay response covering all key points with supporting evidence."
                    : "An essay that addresses some aspects but lacks depth or supporting arguments.";

            default:
                return $isCorrect ? $correctAnswer : "Incorrect response";
        }
    }

    protected function generateFeedback($question, $correctAnswer, $studentAnswer): string
    {
        $feedbackTemplates = [
            "Your answer was partially correct, but consider: %s",
            "The correct approach would be: %s",
            "You were on the right track, but missed: %s",
            "Remember that: %s",
            "Key concept to review: %s"
        ];

        $template = $feedbackTemplates[array_rand($feedbackTemplates)];
        $correct = is_array($correctAnswer) ? implode(', ', $correctAnswer) : $correctAnswer;

        return sprintf($template, "the correct answer is $correct. Your response was: " .
            (is_array($studentAnswer) ? implode(', ', $studentAnswer) : $studentAnswer));
    }
}
