<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnnouncementsTableSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks temporarily
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Clear existing announcements
        DB::table('announcements')->truncate();

        $announcementTypes = [
            'academic' => [
                'Exam Schedule Update',
                'New Course Materials Available',
                'Curriculum Changes',
                'Important Deadline Reminder'
            ],
            'event' => [
                'Upcoming Science Fair',
                'School Sports Day Announcement',
                'Career Counseling Session',
                'Parent-Teacher Meeting'
            ],
            'general' => [
                'School Closure Notice',
                'Holiday Schedule',
                'Facility Maintenance',
                'Transportation Changes'
            ]
        ];

        $gradeLevels = ['9', '10', '11', '12', 'all'];
        $now = Carbon::now();
        $announcements = [];

        // Create 5-10 announcements per grade level
        foreach ($gradeLevels as $grade) {
            $announcementCount = rand(5, 10);

            for ($i = 1; $i <= $announcementCount; $i++) {
                $type = array_rand($announcementTypes);
                $title = $announcementTypes[$type][array_rand($announcementTypes[$type])];

                $publishDate = $now->copy()->subDays(rand(0, 30));
                $expirationDate = (rand(0, 10) > 2) // 70% chance of having expiration
                    ? $publishDate->copy()->addDays(rand(3, 21))
                    : null;

                $isActive = !$expirationDate || $expirationDate->gt($now);

                $announcements[] = [
                    'title' => "[Grade $grade] " . $title . " #$i",
                    'content' => $this->generateAnnouncementContent($type, $grade),
                    'target_grade_level' => $grade,
                    'publish_date' => $publishDate,
                    'expiration_date' => $expirationDate,
                    'is_active' => $isActive,
                    'created_at' => $now,
                    'updated_at' => $now
                ];
            }
        }

        DB::table('announcements')->insert($announcements);

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    protected function generateAnnouncementContent(string $type, string $grade): string
    {
        $contents = [
            'academic' => [
                "Attention all Grade $grade students: Please be advised that there will be changes to the upcoming exam schedule. The new timetable will be posted on the school portal by end of day tomorrow.",
                "Grade $grade students are reminded that the deadline for submitting your research papers is approaching. Late submissions will not be accepted without prior approval.",
                "New supplementary materials for Grade $grade courses are now available in the digital library. These resources will help you prepare for the final examinations."
            ],
            'event' => [
                "The annual Grade $grade Science Fair will be held next Friday in the school auditorium. Participants should prepare their projects and arrive by 8:30 AM.",
                "Grade $grade parents are invited to the upcoming Parent-Teacher Meeting scheduled for next week. Please check the portal for your assigned time slot.",
                "Sports Day for Grade $grade students is coming up! Sign up for your favorite events at the PE department by this Friday."
            ],
            'general' => [
                "Important notice for all Grade $grade students: The school will be closed next Monday for maintenance work. Classes will resume on Tuesday.",
                "Grade $grade students: Please note changes to the bus schedule effective immediately. The updated routes are posted on the notice board.",
                "Attention Grade $grade: The library will have extended hours during exam period, open until 7:00 PM Monday through Thursday."
            ]
        ];

        return $contents[$type][array_rand($contents[$type])];
    }
}
