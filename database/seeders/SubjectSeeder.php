<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    public function run()
    {
        $subjects = [
            ['name' => 'Toán'],
            ['name' => 'Tiếng Anh'],
            ['name' => 'Lập trình Python'],
            ['name' => 'Hóa học'],
            ['name' => 'Ngữ văn'],
            ['name' => 'Vật lý'],
            ['name' => 'Đàn piano'],
        ];

        foreach ($subjects as $subject) {
            Subject::create($subject);
        }
    }
}
