<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Session;

class SessionSeeder extends Seeder
{
    public function run()
    {
        // Phiên học 1
        Session::create([
            'course_id' => 1, // Khóa học 1
            'date' => now()->addDays(1),
            'start_time' => '14:00:00',
            'end_time' => '16:00:00',
            'status' => 'pending',
            'feedback' => null,
        ]);

        // Phiên học 2
        Session::create([
            'course_id' => 2,
            'date' => now()->addDays(2),
            'start_time' => '09:00:00',
            'end_time' => '11:00:00',
            'status' => 'completed',
            'feedback' => 'Buổi học hiệu quả, gia sư giảng giải rõ ràng.',
        ]);

        // Phiên học 3
        Session::create([
            'course_id' => 3,
            'date' => now()->addDays(3),
            'start_time' => '18:00:00',
            'end_time' => '20:00:00',
            'status' => 'cancelled',
            'feedback' => 'Học viên vắng mặt không báo trước.',
        ]);

        // Phiên học 4
        Session::create([
            'course_id' => 4,
            'date' => now()->addDays(4),
            'start_time' => '15:00:00',
            'end_time' => '17:00:00',
            'status' => 'completed',
            'feedback' => 'Gia sư nhiệt tình, học sinh tiến bộ rõ rệt.',
        ]);

        // Phiên học 5
        Session::create([
            'course_id' => 5,
            'date' => now()->addDays(5),
            'start_time' => '10:00:00',
            'end_time' => '12:00:00',
            'status' => 'pending',
            'feedback' => null,
        ]);

        // Phiên học 6
        Session::create([
            'course_id' => 6,
            'date' => now()->addDays(6),
            'start_time' => '08:00:00',
            'end_time' => '10:00:00',
            'status' => 'completed',
            'feedback' => 'Gia sư giảng rất dễ hiểu, học viên hài lòng.',
        ]);

        // Phiên học 7
        Session::create([
            'course_id' => 7,
            'date' => now()->addDays(7),
            'start_time' => '16:00:00',
            'end_time' => '18:00:00',
            'status' => 'completed',
            'feedback' => 'Phiên học được dời do yêu cầu của học sinh.',
        ]);

        // Phiên học 8
        Session::create([
            'course_id' => 8,
            'date' => now()->addDays(8),
            'start_time' => '13:00:00',
            'end_time' => '15:00:00',
            'status' => 'pending',
            'feedback' => null,
        ]);

        // Phiên học 9
        Session::create([
            'course_id' => 9,
            'date' => now()->addDays(9),
            'start_time' => '19:00:00',
            'end_time' => '21:00:00',
            'status' => 'completed',
            'feedback' => 'Gia sư có phương pháp rất sáng tạo, học sinh yêu thích.',
        ]);

        // Phiên học 10
        Session::create([
            'course_id' => 10,
            'date' => now()->addDays(10),
            'start_time' => '17:00:00',
            'end_time' => '19:00:00',
            'status' => 'cancelled',
            'feedback' => 'Gia sư không thể tham gia do lý do cá nhân.',
        ]);
    }
}
