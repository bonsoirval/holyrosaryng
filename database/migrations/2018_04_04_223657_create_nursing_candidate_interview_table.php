<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNursingCandidateInterviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nursing_candidate_interview', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('exam_num');
          $table->unsignedSmallInteger('user_id')->unique();
          $table->text('phone');
          $table->string('total_score');
          $table->string('total_grade');
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
      Schema::dropIfExists('nursing_candidate_interview');
    }
}
