<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::drop('users');
        Schema::create('users', function (Blueprint $table) {
           $table->string('email');
           $table->string('name')->nullable();
           $table->string('last_name')->nullable();
           $table->string('phone')->nullable();
           $table->string('password',60);
           $table->boolean('profile')->nullable();
           $table->string('active')->nullable();
//$table->foreign('code_career')->references('code_career')->on('careers');
           //$table->foreign('id_type_user')->references('id_type_user')->on('typeUsers');
           $table->rememberToken();
           $table->timestamps();
           $table->primary('email');

       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
