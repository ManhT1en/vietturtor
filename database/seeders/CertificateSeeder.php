<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Certificate;

class CertificateSeeder extends Seeder
{
    public function run()
    {
        // Chứng chỉ cho tutor_profile_id = 1
        Certificate::create([
            'tutor_profile_id' => 1,
            'title' => 'Bằng Cử nhân Sư phạm Toán',
            'image' => 'path/to/image1.jpg',
            'issued_date' => '2015-06-01',
            'description' => 'Bằng cử nhân được cấp bởi Đại học Giáo dục',
        ]);

        Certificate::create([
            'tutor_profile_id' => 1,
            'title' => 'IELTS 7.5',
            'image' => 'path/to/image2.jpg',
            'issued_date' => '2020-09-15',
            'description' => 'Chứng chỉ IELTS với điểm số 7.5',
        ]);

        Certificate::create([
            'tutor_profile_id' => 1,
            'title' => 'Chứng chỉ Tin học Quốc tế IC3',
            'image' => 'path/to/image3.jpg',
            'issued_date' => '2018-11-20',
            'description' => 'Chứng chỉ IC3 Global Standard 5',
        ]);

        // Chứng chỉ cho tutor_profile_id = 2
        Certificate::create([
            'tutor_profile_id' => 2,
            'title' => 'Bằng Thạc sĩ Ngôn ngữ Anh',
            'image' => 'path/to/image4.jpg',
            'issued_date' => '2017-05-10',
            'description' => 'Bằng thạc sĩ được cấp bởi Đại học Ngoại ngữ Hà Nội',
        ]);

        Certificate::create([
            'tutor_profile_id' => 2,
            'title' => 'TOEIC 950',
            'image' => 'path/to/image5.jpg',
            'issued_date' => '2021-03-08',
            'description' => 'Chứng chỉ TOEIC với điểm số 950',
        ]);

        // Chứng chỉ cho tutor_profile_id = 3
        Certificate::create([
            'tutor_profile_id' => 3,
            'title' => 'Chứng chỉ Lập trình Python',
            'image' => 'path/to/image6.jpg',
            'issued_date' => '2019-09-12',
            'description' => 'Khóa học lập trình Python chuyên sâu tại Code Academy',
        ]);

        Certificate::create([
            'tutor_profile_id' => 3,
            'title' => 'Bằng Kỹ sư Công nghệ Thông tin',
            'image' => 'path/to/image7.jpg',
            'issued_date' => '2016-06-25',
            'description' => 'Bằng kỹ sư được cấp bởi Đại học Bách Khoa',
        ]);

        Certificate::create([
            'tutor_profile_id' => 3,
            'title' => 'Chứng chỉ Scrum Master',
            'image' => 'path/to/image8.jpg',
            'issued_date' => '2022-02-15',
            'description' => 'Chứng chỉ Scrum Master Certified (SMC)',
        ]);
    }
}
