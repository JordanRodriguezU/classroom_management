<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHourHandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hour_hands', function (Blueprint $table) {
          $table->string('id_hourHand');
          $table->string('name')->nullable();
          $table->time('hour_start')->nullable();
          $table->time('hour_end')->nullable();
          $table->timestamps();
          $table->primary('id_hourHand');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hour_hands');
    }
}
