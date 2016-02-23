<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
             
            $table->string('code_classroom');
            $table->integer('id_place');
            $table->foreign('id_place')->references('id_place')->on('places');
            $table->string('description')->nullable();
            $table->string('observation')->nullable();
            $table->timestamps();
            $table->primary('code_classroom');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('classrooms');
    }
}
