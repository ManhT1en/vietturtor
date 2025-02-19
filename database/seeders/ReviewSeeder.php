<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        // Đánh giá 1
        Review::create([
            'course_id' => 1,
            'student_id' => 1, // Học sinh
            'tutor_id' => 2,
            'rating' => 4.5,
            'comment' => 'Gia sư dạy tốt và nhiệt tình.',
        ]);

        // Đánh giá 2
        Review::create([
            'course_id' => 2,
            'student_id' => 2,
            'tutor_id' => 3,
            'rating' => 3.0,
            'comment' => 'Gia sư còn thiếu kinh nghiệm.',
        ]);

        // Đánh giá 3
        Review::create([
            'course_id' => 3,
            'student_id' => 3,
            'tutor_id' => 4,
            'rating' => 5.0,
            'comment' => 'Gia sư rất chuyên nghiệp và tận tâm.',
        ]);

        // Đánh giá 4
        Review::create([
            'course_id' => 4,
            'student_id' => 4,
            'tutor_id' => 5,
            'rating' => 4.0,
            'comment' => 'Gia sư khá tốt, nhưng cần cải thiện thời gian phản hồi.',
        ]);

        // Đánh giá 5
        Review::create([
            'course_id' => 5,
            'student_id' => 5,
            'tutor_id' => 6,
            'rating' => 2.5,
            'comment' => 'Không hài lòng với cách giảng dạy.',
        ]);

        // Đánh giá 6
        Review::create([
            'course_id' => 6,
            'student_id' => 6,
            'tutor_id' => 6,
            'rating' => 4.8,
            'comment' => 'Kỹ năng sư phạm tốt, hỗ trợ bài tập hiệu quả.',
        ]);

        // Đánh giá 7
        Review::create([
            'course_id' => 7,
            'student_id' => 7,
            'tutor_id' => 6,
            'rating' => 3.5,
            'comment' => 'Cần tập trung hơn vào việc hướng dẫn bài tập.',
        ]);

        // Đánh giá 8
        Review::create([
            'course_id' => 8,
            'student_id' => 8,
            'tutor_id' => 6,
            'rating' => 5.0,
            'comment' => 'Gia sư tuyệt vời, hỗ trợ tốt cho kỳ thi.',
        ]);

        // Đánh giá 9
        Review::create([
            'course_id' => 9,
            'student_id' => 9,
            'tutor_id' => 6,
            'rating' => 4.2,
            'comment' => 'Phương pháp dạy tốt nhưng cần cải thiện về thời gian.',
        ]);

        // Đánh giá 10
        Review::create([
            'course_id' => 10,
            'student_id' => 10,
            'tutor_id' => 6,
            'rating' => 3.8,
            'comment' => 'Gia sư thân thiện nhưng còn thiếu sự chuẩn bị.',
        ]);
        // Đánh giá 11
        Review::create([
            'course_id' => 4,
            'student_id' => 4,
            'tutor_id' => 5,
            'rating' => 5.0,
            'comment' => 'Dạy Ok.',
        ]);
        Review::create([
            'course_id' => 4,
            'student_id' => 4,
            'tutor_id' => 5,
            'rating' => 5.0,
            'comment' => 'Dạy Ok.',
        ]);
        Review::create([
            'course_id' => 4,
            'student_id' => 4,
            'tutor_id' => 5,
            'rating' => 5.0,
            'comment' => 'Dạy Ok.',
        ]);
        Review::create([
            'course_id' => 4,
            'student_id' => 4,
            'tutor_id' => 5,
            'rating' => 5.0,
            'comment' => 'Dạy Ok.',
        ]);
        
    }
}
