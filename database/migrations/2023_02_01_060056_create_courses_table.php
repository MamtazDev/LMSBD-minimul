<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('course_name')->unique();
            $table->string('slug');
            $table->string('course_duration');
            $table->string('start_date');
            $table->string('course_short_des');
            $table->text('course_desceiption');
=======
            $table->string('course_name');
            $table->string('course_duration');
            $table->string('start_date');
>>>>>>> zerin
            $table->string('status')->nullable();
            $table->string('thumbnail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
