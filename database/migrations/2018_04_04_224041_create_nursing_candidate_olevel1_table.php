<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNursingCandidateOlevel1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nursing_candidates_olevels1', function (Blueprint $table) {
          $table->increments('id');
          $table->string('english')->default(0);
          $table->string('examination')->default(0);
          $table->string('exam_number')->default(0);
          $table->unsignedSmallInteger('exam_year')->default(0);
          $table->string('mathematics')->default(0);
          $table->string('chemistry')->default(0);
          $table->string('physics')->default(0);
          $table->string('biology')->default(0);
          $table->date('exam_year');
          $table->unsignedSmallInteger('user_id')->unique();
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
      Schema::dropIfExists('nursing_candidates_olevels1');
    }
}
