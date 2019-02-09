<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePtsCandidateResultTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'pts_candidate_result';

    /**
     * Run the migrations.
     * @table pts_candidate_result
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedSmallInteger('user_id');
            $table->string('name', 191)->default('NULL');
            $table->string('human_biology', 191)->default('NULL');
            $table->string('foundation_of_nursing', 191)->default('NULL');
            $table->string('use_of_english', 191)->default('NULL');
            $table->string('medical_jurisprudence', 191)->default('NULL');
            $table->string('microbiology', 191)->default('NULL');
            $table->string('physics', 191)->default('NULL');
            $table->string('chemistry', 191)->default('NULL');
            $table->string('behaviour_science', 191)->default('NULL');
            $table->string('emergency_situation', 191)->default('NULL');
            $table->string('nutrition', 191)->default('NULL');
            $table->string('pharmacology', 191)->default('NULL');
            $table->string('moral_ethics', 191)->default('NULL');
            $table->string('pho', 191)->default('NULL');
            $table->string('computer_science', 191)->default('NULL');
            $table->string('practical', 191)->default('NULL');
            $table->string('total', 191)->default('NULL');
            $table->string('remark', 191)->default('NULL');
            $table->string('position', 191)->default('NULL');
            $table->string('exam_number', 191)->default('NULL');
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
