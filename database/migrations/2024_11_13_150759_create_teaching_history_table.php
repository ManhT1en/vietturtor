<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachingHistoryTable extends Migration
{
    public function up()
    {
        Schema::create('teaching_history', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->foreignId('tutor_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('student_id')->constrained('users')->onDelete('cascade');
            $table->date('date'); // Ngày diễn ra buổi học
            $table->time('start_time'); // Giờ bắt đầu
            $table->time('end_time'); // Giờ kết thúc
            $table->enum('status', ['completed', 'cancelled', 'pending'])->default('pending'); // Trạng thái buổi học
            $table->text('feedback')->nullable(); // Phản hồi từ phụ huynh/học sinh (tùy chọn)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teaching_history');
    }
}
