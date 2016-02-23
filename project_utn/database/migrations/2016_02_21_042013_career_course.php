<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CareerCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_course', function (Blueprint $table) {
           $table->string('description')->nullable();
           $table->timestamps();

       });
        Schema::table('career_course', function ($table) {
            $table->string('code_career')->nullable();
            $table->string('code_course')->nullable();
            $table->foreign('code_career')->references('code_career')->on('careers');
            $table->foreign('code_course')->references('code_course')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('career_course');
    }
}
