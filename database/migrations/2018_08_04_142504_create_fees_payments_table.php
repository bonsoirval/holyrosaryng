<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeesPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mat_number');
            $table->integer('school_id');
            $table->enum('level', ['1', '2', '3']);
            $table->integer('fee_id');
            $table->enum('semester', ['1', '2']);
            $table->enum('status', ['confirmed', 'open', 'unconfirmed']);
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
        Schema::dropIfExists('fees_payments');
    }
}
