<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePtsCandidateResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pts_candidate_result', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedSmallInteger('user_id')->unique();
          $table->string('name')->default('NULL');
          $table->string('human_biology')->default('NULL');
          $table->string('foundation_of_nursing')->default('NULL');
          $table->string('use_of_english')->default('NULL');
          $table->string('medical_jurisprudence')->default('NULL');
          $table->string('microbiology')->default('NULL');
          $table->string('physics')->default('NULL');
          $table->string('chemistry')->default('NULL');
          $table->string('behaviour_science')->default('NULL');
          $table->string('emergency_situation')->default('NULL');
          $table->string('nutrition')->default('NULL');
          $table->string('pharmacology')->default('NULL');
          $table->string('moral_ethics')->default('NULL');
          $table->string('pho')->default("NULL");
          $table->string('computer_science')->default("NULL");
          $table->string('practical')->default('NULL');
          $table->string('total')->default('NULL');
          $table->string('remark')->default('NULL');
          $table->string('position')->default('NULL');
          $table->string('exam_number')->default('NULL');
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
      Schema::dropIfExists('pts_candidate_result');
    }
}
