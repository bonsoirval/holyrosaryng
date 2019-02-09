<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNursingCandidatesNextkinsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'nursing_candidates_nextkins';

    /**
     * Run the migrations.
     * @table nursing_candidates_nextkins
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
            $table->text('nextkin_address');
            $table->text('nextkin_phone');
            $table->string('relationship', 191)->default('NULL');

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
