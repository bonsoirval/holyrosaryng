<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNursingCandidatesNextkinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nursing_candidate_nextkin', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedSmallInteger('user_id')->unique();
          $table->string('name')->default("NULL");
          $table->text('nextkin_address');
          $table->text('nextkin_phone');
          $table->string('relationship')->default('NULL');
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
      Schema::dropIfExists('nursing_candidates_nextkins');
    }
}
