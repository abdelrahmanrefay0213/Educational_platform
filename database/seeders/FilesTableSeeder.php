<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FilesTableSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks temporarily
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Clear existing files
        DB::table('files')->truncate();

        // Get all lesson IDs
        $lessonIds = DB::table('lessons')->pluck('lesson_id')->toArray();

        // File types and extensions
        $fileTypes = [
            'pdf' => ['Lecture Notes', 'Study Guide', 'Reference Material', 'Worksheet'],
            'docx' => ['Assignment', 'Template', 'Outline'],
            'ppt' => ['Presentation', 'Slide Deck'],
            'xlsx' => ['Data Sheet', 'Gradebook', 'Exercise']
        ];

        $now = Carbon::now();
        $files = [];

        foreach ($lessonIds as $lessonId) {
            // Create 2-4 files per lesson
            $fileCount = rand(2, 4);
            $usedTypes = [];

            for ($i = 1; $i <= $fileCount; $i++) {
                // Get random file type that hasn't been used for this lesson
                $availableTypes = array_diff(array_keys($fileTypes), $usedTypes);
                $type = $availableTypes[array_rand($availableTypes)];
                $usedTypes[] = $type;

                // Get random file purpose for this type
                $purposes = $fileTypes[$type];
                $purpose = $purposes[array_rand($purposes)];

                $fileName = "Lesson_{$lessonId}_{$purpose}_{$i}.{$type}";
                $filePath = "materials/lessons/{$lessonId}/{$fileName}";

                $files[] = [
                    'file_name' => $fileName,
                    'lesson_id' => $lessonId,
                    'file_path' => $filePath,
                    'created_at' => $now,
                    'updated_at' => $now
                ];
            }
        }

        DB::table('files')->insert($files);

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
