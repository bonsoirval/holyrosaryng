<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedlabCandidateResultTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'medlab_candidate_result';

    /**
     * Run the migrations.
     * @table medlab_candidate_result
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedSmallInteger('exam_number');
            $table->unsignedSmallInteger('user_id');
            $table->double('score')->default('0.00');
            $table->enum('remark', ['PASS', 'FAIL'])->default('FAIL');
            $table->text('used_card');

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
