<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNursingStudentsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'nursing_students';

    /**
     * Run the migrations.
     * @table nursing_students
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('mat_number', 10)->nullable()->default(null);
            $table->string('name', 191);
            $table->string('email', 191);
            $table->string('password', 191);
            $table->rememberToken();
            $table->string('phone', 11);
            $table->enum('current_year', ['1', '2', '3', '4'])->nullable()->default('1');

            $table->unique(["email"], 'nursing_candidates_email_unique');
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
