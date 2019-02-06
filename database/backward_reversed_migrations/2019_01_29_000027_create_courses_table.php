<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'courses';

    /**
     * Run the migrations.
     * @table courses
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('course_code', 10);
            $table->string('course_title', 50);
            $table->enum('level', ['100', '200', '300', '']);
            $table->enum('school', ['nursing', 'medlab', 'midwifery']);
            $table->smallInteger('year');
            $table->integer('course_load');

            $table->unique(["course_code"], 'course_code');
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
