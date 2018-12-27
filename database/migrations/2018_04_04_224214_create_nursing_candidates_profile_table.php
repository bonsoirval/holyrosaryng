<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNursingCandidatesProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nursing_candidates_profiles', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedSmallInteger('user_id')->unique();
          $table->text('dob');
          $table->enum('gender', ['female','male'])->default('female');
          $table->string('passport', 4);
          $table->unsignedSmallInteger('origin_state')->default('1');
          $table->text('birth_town');
          $table->string('lga');
          $table->unsignedSmallInteger('nationality')->default(1);
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
      Schema::dropIfExists('nursing_candidates_profiles');
    }
}
