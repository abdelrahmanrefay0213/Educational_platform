<?php

namespace Database\Seeders;

use App\Models\Announcement;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            StudentsTableSeeder::class,
            LessonsTableSeeder::class,
            VideosTableSeeder::class,
            TestBankTableSeeder::class,
            StudentProgressTableSeeder::class,
            QuestionsTableSeeder::class,
            FilesTableSeeder::class,
            AnswerChoicesTableSeeder::class,
            TestAttemptsTableSeeder::class,
            StudentAnswersTableSeeder::class,
            AnnouncementsTableSeeder::class,
            // Other seeders...
        ]);
    }
}
