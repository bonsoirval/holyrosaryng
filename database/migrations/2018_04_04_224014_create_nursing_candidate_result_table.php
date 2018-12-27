<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNursingCandidateResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nursing_candidate_result', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedSmallInteger('exam_number');
          $table->unsignedSmallInteger('user_id')->unique();
          $table->float('score')->default(0);
          $table->enum('remark', ['PASS', 'FAIL'])->default('FAIL');
          $table->text('used_card');
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
      Schema::dropIfExists('nursing_candidate_result');
    }
}
