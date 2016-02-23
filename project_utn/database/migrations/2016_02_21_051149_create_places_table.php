<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->integer('id_place');
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
            $table->primary('id_place');

        });
        Schema::table('places', function($table){
            $table->string('id_hourHand')->nullable();
            $table->foreign('id_hourHand')->references('id_hourHand')->on('hour_hands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('places');
    }
}
