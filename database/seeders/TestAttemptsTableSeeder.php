<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TestAttemptsTableSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks temporarily
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Clear existing test attempts
        DB::table('test_attempts')->truncate();

        // Get all students and tests
        $students = DB::table('students')->pluck('student_id')->toArray();
        $tests = DB::table('test_bank')->get();

        $now = Carbon::now();
        $attempts = [];

        foreach ($students as $studentId) {
            // Each student attempts 20-40% of available tests
            $testsToAttempt = $tests->random(rand(
                (int)($tests->count() * 0.2),
                (int)($tests->count() * 0.4)
            ));

            foreach ($testsToAttempt as $test) {
                $startTime = $now->copy()->subDays(rand(0, 30));
                $durationMinutes = $this->getTestDurationInMinutes($test->duration);
                $endTime = (rand(0, 10) > 1 // 90% chance of completed attempt
                    ? $startTime->copy()->addMinutes(rand(
                        (int)($durationMinutes * 0.5),
                        $durationMinutes
                    ))
                    : null);

                // Calculate score if test was completed
                $score = $endTime
                    ? rand(
                        $test->test_type === 'essay' ? 40 : 50, // Essays tend to have higher minimum scores
                        100
                    )
                    : 0;

                $attempts[] = [
                    'student_id' => $studentId,
                    'test_id' => $test->test_id,
                    'score' => $score,
                    'start_time' => $startTime,
                    'end_time' => $endTime,
                    'created_at' => $now,
                    'updated_at' => $now
                ];
            }
        }

        DB::table('test_attempts')->insert($attempts);

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Convert time string (HH:MM:SS) to minutes
     */
    protected function getTestDurationInMinutes($timeString): int
    {
        $parts = explode(':', $timeString);
        return (int)$parts[0] * 60 + (int)$parts[1];
    }
}
