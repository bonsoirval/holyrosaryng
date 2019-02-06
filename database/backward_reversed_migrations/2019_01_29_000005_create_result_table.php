<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'result';

    /**
     * Run the migrations.
     * @table result
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('course_code');
            $table->text('mat_number');
            $table->integer('test');
            $table->integer('assignment')->default('0');
            $table->integer('lab')->default('0');
            $table->integer('total')->default('0');
            $table->enum('remark', ['FAIL', 'PASS', 'EXCELLENT', ''])->nullable()->default('FAIL');
            $table->enum('grade', ['A', 'B', 'C', 'D', 'E', 'F'])->default('F');
            $table->enum('school', ['nurising', 'medlab', 'midwifery', '']);
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
