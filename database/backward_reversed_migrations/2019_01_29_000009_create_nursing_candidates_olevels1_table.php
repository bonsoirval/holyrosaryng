<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNursingCandidatesOlevels1Table extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'nursing_candidates_olevels1';

    /**
     * Run the migrations.
     * @table nursing_candidates_olevels1
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('english', 191)->default('0');
            $table->string('examination', 191)->default('0');
            $table->string('exam_number', 191)->default('0');
            $table->unsignedSmallInteger('exam_year')->default('0');
            $table->string('mathematics', 191)->default('0');
            $table->string('chemistry', 191)->default('0');
            $table->string('physics', 191)->default('0');
            $table->string('biology', 191)->default('0');
            $table->unsignedSmallInteger('user_id')->default('0');

            $table->unique(["user_id"], 'user_id');
            $table->nullableTimestamps();
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
