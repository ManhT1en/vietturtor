<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tutor_profile_id')->constrained('tutor_profiles')->onDelete('cascade');
            $table->string('title'); // Tên của bằng cấp hoặc chứng chỉ
            $table->string('image'); // Đường dẫn hình ảnh
            $table->date('issued_date')->nullable(); // Ngày cấp (tùy chọn)
            $table->text('description')->nullable(); // Mô tả (tùy chọn)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('certificates');
    }
}
