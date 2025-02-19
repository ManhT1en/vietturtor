<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Report;

class ReportSeeder extends Seeder
{
    public function run()
    {
        // Báo cáo 1
        Report::create([
            'reported_by' => 1, // Người báo cáo
            'course_id' => 1,
            'description' => 'Gia sư thường xuyên đi muộn.',
            'status' => 'pending',
        ]);

        // Báo cáo 2
        Report::create([
            'reported_by' => 2,
            'course_id' => 2,
            'description' => 'Học sinh không tuân thủ thời gian học.',
            'status' => 'resolved',
        ]);

        // Báo cáo 3
        Report::create([
            'reported_by' => 3,
            'course_id' => 3,
            'description' => 'Gia sư không đủ chuyên môn như cam kết.',
            'status' => 'dismissed',
        ]);

        // Báo cáo 4
        Report::create([
            'reported_by' => 4,
            'course_id' => 4,
            'description' => 'Học sinh gây rối trong giờ học.',
            'status' => 'pending',
        ]);

        // Báo cáo 5
        Report::create([
            'reported_by' => 5,
            'course_id' => 5,
            'description' => 'Gia sư thu phí cao hơn thỏa thuận.',
            'status' => 'resolved',
        ]);

        // Báo cáo 6
        Report::create([
            'reported_by' => 6,
            'course_id' => 6,
            'description' => 'Học sinh nghỉ học mà không báo trước.',
            'status' => 'pending',
        ]);

        // Báo cáo 7
        Report::create([
            'reported_by' => 7,
            'course_id' => 7,
            'description' => 'Gia sư không làm theo kế hoạch học tập đã đặt ra.',
            'status' => 'dismissed',
        ]);

        // Báo cáo 8
        Report::create([
            'reported_by' => 8,
            'course_id' => 8,
            'description' => 'Học sinh không hoàn thành bài tập về nhà.',
            'status' => 'resolved',
        ]);

        // Báo cáo 9
        Report::create([
            'reported_by' => 9,
            'course_id' => 9,
            'description' => 'Gia sư không trung thực về kinh nghiệm làm việc.',
            'status' => 'pending',
        ]);

        // Báo cáo 10
        Report::create([
            'reported_by' => 10,
            'course_id' => 10,
            'description' => 'Học sinh có hành vi không phù hợp với gia sư.',
            'status' => 'dismissed',
        ]);
    }
}
