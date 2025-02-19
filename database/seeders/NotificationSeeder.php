<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notification;

class NotificationSeeder extends Seeder
{
    public function run()
    {
        // Thông báo 1
        Notification::create([
            'user_id' => 1, // ID của phụ huynh hoặc gia sư
            'message' => 'Bạn đã nhận được yêu cầu ứng tuyển.',
            'status' => 'unread',
        ]);

        // Thông báo 2
        Notification::create([
            'user_id' => 2,
            'message' => 'Khóa học "Toán lớp 12" đã được gia sư nhận dạy.',
            'status' => 'unread',
        ]);

        // Thông báo 3
        Notification::create([
            'user_id' => 3,
            'message' => 'Bạn có một đánh giá mới từ phụ huynh.',
            'status' => 'unread',
        ]);

        // Thông báo 4
        Notification::create([
            'user_id' => 4,
            'message' => 'Khóa học "Tiếng Anh lớp 3" của bạn đã bắt đầu.',
            'status' => 'read',
        ]);

        // Thông báo 5
        Notification::create([
            'user_id' => 5,
            'message' => 'Thanh toán cho khóa học "Hóa lớp 11" đã được xác nhận.',
            'status' => 'read',
        ]);

        // Thông báo 6
        Notification::create([
            'user_id' => 6,
            'message' => 'Gia sư đã hủy yêu cầu dạy khóa học "Ngữ văn lớp 9".',
            'status' => 'unread',
        ]);

        // Thông báo 7
        Notification::create([
            'user_id' => 7,
            'message' => 'Bạn đã nhận được một tin nhắn mới từ phụ huynh.',
            'status' => 'unread',
        ]);

        // Thông báo 8
        Notification::create([
            'user_id' => 8,
            'message' => 'Khóa học "Đàn piano cơ bản" đã được hoàn thành.',
            'status' => 'read',
        ]);

        // Thông báo 9
        Notification::create([
            'user_id' => 9,
            'message' => 'Tài khoản của bạn đã được xác minh thành công.',
            'status' => 'read',
        ]);

        // Thông báo 10
        Notification::create([
            'user_id' => 10,
            'message' => 'Bạn đã được thêm vào khóa học "Lập trình Python".',
            'status' => 'unread',
        ]);
    }
}
