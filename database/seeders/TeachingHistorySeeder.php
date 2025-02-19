<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeachingHistory;

class TeachingHistorySeeder extends Seeder
{
    public function run()
    {
        // Lịch sử dạy 1
        TeachingHistory::create([
            'course_id' => 1,
            'tutor_id' => 2, // Gia sư 2
            'student_id' => 1, // Học sinh 1
            'date' => now()->addDays(1),
            'start_time' => '14:00:00',
            'end_time' => '16:00:00',
            'status' => 'completed',
            'feedback' => 'Buổi học tốt, học sinh tiếp thu nhanh.',
        ]);

        // Lịch sử dạy 2
        TeachingHistory::create([
            'course_id' => 2,
            'tutor_id' => 3,
            'student_id' => 2,
            'date' => now()->addDays(2),
            'start_time' => '09:00:00',
            'end_time' => '11:00:00',
            'status' => 'completed',
            'feedback' => 'Gia sư rất nhiệt tình và giảng bài dễ hiểu.',
        ]);

        // Lịch sử dạy 3
        TeachingHistory::create([
            'course_id' => 3,
            'tutor_id' => 4,
            'student_id' => 3,
            'date' => now()->addDays(3),
            'start_time' => '10:00:00',
            'end_time' => '12:00:00',
            'status' => 'cancelled',
            'feedback' => 'Học sinh không tham gia vì lý do cá nhân.',
        ]);

        // Lịch sử dạy 4
        TeachingHistory::create([
            'course_id' => 4,
            'tutor_id' => 5,
            'student_id' => 4,
            'date' => now()->addDays(4),
            'start_time' => '16:00:00',
            'end_time' => '18:00:00',
            'status' => 'completed',
            'feedback' => 'Gia sư có cách dạy rất hiệu quả, học sinh tiến bộ rõ rệt.',
        ]);

        // Lịch sử dạy 5
        TeachingHistory::create([
            'course_id' => 5,
            'tutor_id' => 6,
            'student_id' => 5,
            'date' => now()->addDays(5),
            'start_time' => '14:00:00',
            'end_time' => '16:00:00',
            'status' => 'completed',
            'feedback' => 'Buổi học hiệu quả, học sinh cảm thấy dễ tiếp thu hơn.',
        ]);

        // Lịch sử dạy 6
        TeachingHistory::create([
            'course_id' => 6,
            'tutor_id' => 7,
            'student_id' => 6,
            'date' => now()->addDays(6),
            'start_time' => '09:00:00',
            'end_time' => '11:00:00',
            'status' => 'completed',
            'feedback' => 'Gia sư giảng bài rất chi tiết và dễ hiểu.',
        ]);

        // Lịch sử dạy 7
        TeachingHistory::create([
            'course_id' => 7,
            'tutor_id' => 8,
            'student_id' => 7,
            'date' => now()->addDays(7),
            'start_time' => '08:00:00',
            'end_time' => '10:00:00',
            'status' => 'pending',
            'feedback' => null,
        ]);

        // Lịch sử dạy 8
        TeachingHistory::create([
            'course_id' => 8,
            'tutor_id' => 9,
            'student_id' => 8,
            'date' => now()->addDays(8),
            'start_time' => '13:00:00',
            'end_time' => '15:00:00',
            'status' => 'completed',
            'feedback' => 'Học sinh tiến bộ nhanh chóng, gia sư rất tận tâm.',
        ]);

        // Lịch sử dạy 9
        TeachingHistory::create([
            'course_id' => 9,
            'tutor_id' => 10,
            'student_id' => 9,
            'date' => now()->addDays(9),
            'start_time' => '18:00:00',
            'end_time' => '20:00:00',
            'status' => 'completed',
            'feedback' => 'Gia sư rất chuyên nghiệp, bài giảng đầy đủ và chi tiết.',
        ]);

        // Lịch sử dạy 10
        TeachingHistory::create([
            'course_id' => 10,
            'tutor_id' => 11,
            'student_id' => 10,
            'date' => now()->addDays(10),
            'start_time' => '11:00:00',
            'end_time' => '13:00:00',
            'status' => 'cancelled',
            'feedback' => 'Học sinh không tham gia do lịch trình thay đổi.',
        ]);
    }
}
