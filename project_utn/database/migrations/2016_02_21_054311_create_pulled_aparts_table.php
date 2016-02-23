<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePulledApartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pulled_aparts', function (Blueprint $table) {
            $table->string('id_pulled_aparts');
            $table->string('code_classroom');
            $table->foreign('code_classroom')->references('code_classroom')->on('classrooms');
            $table->string('id_period');
            $table->foreign('id_period')->references('id_period')->on('periods');
            $table->time('hour_start')->nullable();
            $table->time('hour_end')->nullable();
            $table->string('email');
            $table->foreign('email')->references('email')->on('users');
            $table->timestamps();
            $table->primary('id_pulled_aparts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pulled_aparts');
    }
}
