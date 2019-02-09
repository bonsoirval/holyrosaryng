<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNursingMatNumberTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'nursing_mat_number';

    /**
     * Run the migrations.
     * @table nursing_mat_number
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('student_id');
            $table->string('mat_number', 45)->nullable()->default('NURS2019XXXX');
            $table->integer('nursing_mat_number_student_id');
            $table->enum('status', ['active', 'used'])->nullable()->default('active');


            $table->foreign('student_id', 'nursing_mat_number_student_id')
                ->references('id')->on('nursing_students')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
