<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VideosTableSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks temporarily
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        // Clear existing videos
        DB::table('videos')->truncate();

        // Get all lesson IDs to associate videos with
        $lessonIds = DB::table('lessons')->pluck('lesson_id')->toArray();

        // Sample video data
        $videos = [];
        $videoTopics = [
            'Introduction', 'Core Concepts', 'Advanced Techniques', 
            'Practical Examples', 'Problem Solving', 'Review Session',
            'Case Studies', 'Interactive Exercises', 'Summary'
        ];
        
        $videoFormats = [
            'lecture', 'tutorial', 'demonstration', 
            'interview', 'animation', 'whiteboard'
        ];

        $now = Carbon::now();

        // Create 3-5 videos for each lesson
        foreach ($lessonIds as $lessonId) {
            $videoCount = rand(3, 5);
            
            for ($i = 1; $i <= $videoCount; $i++) {
                $topic = $videoTopics[array_rand($videoTopics)];
                $format = $videoFormats[array_rand($videoFormats)];
                
                $videos[] = [
                    'video_name' => "Lesson {$lessonId} - {$topic} ({$format})",
                    'lesson_id' => $lessonId,
                    'video_path' => "videos/lessons/{$lessonId}/video_{$i}.mp4",
                    'created_at' => $now,
                    'updated_at' => $now
                ];
            }
        }

        DB::table('videos')->insert($videos);
        
        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}