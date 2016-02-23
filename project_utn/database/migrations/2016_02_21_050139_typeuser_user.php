<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TypeuserUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('typeuser_user', function (Blueprint $table) {
            $table->string('id_type_user')->nullable();
            $table->string('email')->nullable();
            $table->foreign('id_type_user')->references('id_type_user')->on('type_users');
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
        Schema::drop('typeuser_user');
    }
}
