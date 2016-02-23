<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CareerUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('career_user', function (Blueprint $table) {
        $table->string('code_career')->nullable();
        $table->string('email')->nullable();
        $table->foreign('code_career')->references('code_career')->on('careers');
        $table->foreign('email')->references('email')->on('users');
        $table->string('description')->nullable();
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
        Schema::drop('career_user');
    }
}
