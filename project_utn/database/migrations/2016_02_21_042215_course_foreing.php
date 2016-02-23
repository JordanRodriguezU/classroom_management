<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CourseForeing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('courses', function ($table) {
        $table->string('code_career')->nullable();
        $table->foreign('code_career')->references('code_career')->on('career_course');

    });

   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('courses', function(Blueprint $table) {
            $table->dropForeign('code_career');
            $table->dropForeign('code_career');
        });
        
    }
}
