<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNursingCandidatePinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nursing_candidate_pins', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('serial_number');
          $table->unsignedInteger('pin')->default(0);
          $table->enum('status', ['active', 'used'])->default('active');
          $table->datetime('date_used');
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
      Schema::dropIfExists('nursing_candidate_pins');
    }
}
