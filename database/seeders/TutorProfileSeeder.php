<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TutorProfile;
use App\Models\User;

class TutorProfileSeeder extends Seeder
{
    public function run()
    {
        // Gia sư 1
        TutorProfile::create([
            'user_id' => 2, // ID của gia sư trong UserSeeder
            'type' => 1,
            'status' => 1, 
            'area' => 3, 
            'bio' => 'Kinh nghiệm 5 năm giảng dạy Toán và Lý.',
            'experience_years' => 5,
            'specialties' => 'Toán, Lý',
            'certificates' => 'Bằng cử nhân Sư phạm Toán',
            'average_rating' => 4.5,
            'total_hours_taught' => 120,
            'min_hourly_rate' => 200000,
            'max_hourly_rate' => 400000,
            'profile_image' => 'path/to/image1.jpg',
            'back_of_id' => 'path/to/image2.jpg',
            'front_of_id' => 'path/to/image2.jpg',
            'sex' => 1,
        ]);

        // Gia sư 2
        TutorProfile::create([
            'user_id' => 3, // ID của gia sư trong UserSeeder
            'type' => 1,
            'status' => 1, 
            'area' => 2, 
            'bio' => 'Kinh nghiệm 6 năm giảng dạy Toán và Lý.',
            'experience_years' => 6,
            'specialties' => 'Toán, Lý, Văn',
            'certificates' => 'Bằng cử nhân Sư phạm Anh',
            'average_rating' => 4.7,
            'total_hours_taught' => 150,
            'min_hourly_rate' => 250000,
            'max_hourly_rate' => 450000,
            'profile_image' => 'path/to/image2.jpg',
            'back_of_id' => 'path/to/image2.jpg',
            'front_of_id' => 'path/to/image2.jpg',
            'sex' => 1,
        ]);

        // Gia sư 3
        TutorProfile::create([
            'user_id' => 4, // ID của gia sư trong UserSeeder
            'type' => 1,
            'status' => 1, 
            'area' => 5, 
            'bio' => 'Kinh nghiệm 3 năm giảng dạy Tiếng Anh và Văn.',
            'experience_years' => 3,
            'specialties' => 'Tiếng Anh, Văn',
            'certificates' => 'Chứng chỉ CELTA',
            'average_rating' => 4.3,
            'total_hours_taught' => 100,
            'min_hourly_rate' => 180000,
            'max_hourly_rate' => 350000,
            'profile_image' => 'path/to/image3.jpg',
            'back_of_id' => 'path/to/image2.jpg',
            'front_of_id' => 'path/to/image2.jpg',
            'sex' => 1,
        ]);

        // Gia sư 4
        TutorProfile::create([
            'user_id' => 5, // ID của gia sư trong UserSeeder
            'bio' => 'Kinh nghiệm 8 năm giảng dạy Toán và Hóa.',
            'type' => 1,
            'status' => 1, 
            'area' => 7, 
            'experience_years' => 8,
            'specialties' => 'Toán, Hóa',
            'certificates' => 'Bằng Thạc sĩ Toán học',
            'average_rating' => 4.9,
            'total_hours_taught' => 200,
            'min_hourly_rate' => 300000,
            'max_hourly_rate' => 600000,
            'profile_image' => 'path/to/image4.jpg',
            'back_of_id' => 'path/to/image2.jpg',
            'front_of_id' => 'path/to/image2.jpg',
            'sex' => 1,
        ]);

        // Gia sư 5
        TutorProfile::create([
            'user_id' => 6, // ID của gia sư trong UserSeeder
            'type' => 1,
            'status' => 1, 
            'area' => 11, 
            'bio' => 'Giảng dạy 2 năm với các khóa học Tiếng Anh cơ bản.',
            'experience_years' => 2,
            'specialties' => 'Tiếng Anh, Ngữ pháp',
            'certificates' => 'Chứng chỉ TOEFL',
            'average_rating' => 4.2,
            'total_hours_taught' => 80,
            'min_hourly_rate' => 150000,
            'max_hourly_rate' => 300000,
            'profile_image' => 'path/to/image5.jpg',
            'back_of_id' => 'path/to/image2.jpg',
            'front_of_id' => 'path/to/image2.jpg',
            'sex' => 1,
        ]);

        // Gia sư 6
        TutorProfile::create([
            'user_id' => 7, // ID của gia sư trong UserSeeder
            'type' => 1,
            'status' => 1, 
            'area' => 12, 
            'bio' => 'Giảng dạy 10 năm trong lĩnh vực Vật lý và Khoa học.',
            'experience_years' => 10,
            'specialties' => 'Vật lý, Khoa học',
            'certificates' => 'Bằng Tiến sĩ Vật lý',
            'average_rating' => 4.8,
            'total_hours_taught' => 300,
            'min_hourly_rate' => 350000,
            'max_hourly_rate' => 700000,
            'profile_image' => 'path/to/image6.jpg',
            'back_of_id' => 'path/to/image2.jpg',
            'front_of_id' => 'path/to/image2.jpg',
            'sex' => 2,
        ]);

        // Gia sư 7
        TutorProfile::create([
            'user_id' => 8, // ID của gia sư trong UserSeeder
            'type' => 1,
            'status' => 1, 
            'area' => 15, 
            'bio' => 'Kinh nghiệm 4 năm giảng dạy Kinh tế và Quản trị.',
            'experience_years' => 4,
            'specialties' => 'Kinh tế, Quản trị',
            'certificates' => 'Bằng cử nhân Kinh tế',
            'average_rating' => 4.4,
            'total_hours_taught' => 110,
            'min_hourly_rate' => 220000,
            'max_hourly_rate' => 450000,
            'profile_image' => 'path/to/image7.jpg',
            'back_of_id' => 'path/to/image2.jpg',
            'front_of_id' => 'path/to/image2.jpg',
            'sex' => 2,
        ]);
    }
}
