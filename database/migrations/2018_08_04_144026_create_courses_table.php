<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('courses', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->string('course_code')->unique();
          $table->smallInteger('workload');
          $table->string('school_id');
          $table->enum('year_id', ['1', '2', '3']);
          $table->enum('semester', ['1', '2']);
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
        //
    }
}
