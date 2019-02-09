<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNursingStudentYearOneTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'nursing_student_year_one';

    /**
     * Run the migrations.
     * @table nursing_student_year_one
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('mat_number', 45)->nullable()->default(null);
            $table->enum('status', ['active', 'suspended', 'passed'])->nullable()->default('active');
            $table->unsignedInteger('course_adviser_id');


            $table->foreign('id', 'nursing_student_year_one_id')
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
