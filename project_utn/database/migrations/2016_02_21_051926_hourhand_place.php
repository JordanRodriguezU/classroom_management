<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HourhandPlace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hourhand_place', function (Blueprint $table) {
            $table->string('id_hourHand')->nullable();
            $table->foreign('id_hourHand')->references('id_hourHand')->on('hour_hands');
            $table->integer('id_place')->nullable();
            $table->foreign('id_place')->references('id_place')->on('places');
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
        Schema::drop('hourhand_place');
    }
}
