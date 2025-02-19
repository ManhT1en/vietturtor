<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('tutor_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('type')->nullable();
            $table->text('bio')->nullable();
            $table->integer('experience_years')->nullable();
            $table->string('specialties')->nullable();
            $table->text('certificates')->nullable();
            $table->float('average_rating')->default(0);
            $table->integer('total_hours_taught')->default(0);
            $table->decimal('min_hourly_rate', 10, 2)->nullable();
            $table->decimal('max_hourly_rate', 10, 2)->nullable();
            $table->string('profile_image')->nullable();
            $table->string('front_of_id')->nullable();
            $table->string('back_of_id')->nullable();
            $table->integer('sex')->nullable();
            $table->integer('birth_year')->nullable();
            $table->integer('area')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tutor_profiles');
    }
}
