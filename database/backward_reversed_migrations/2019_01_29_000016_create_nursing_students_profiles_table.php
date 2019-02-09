<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNursingStudentsProfilesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'nursing_students_profiles';

    /**
     * Run the migrations.
     * @table nursing_students_profiles
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
            $table->text('dob');
            $table->enum('gender', ['female', 'male'])->default('female');
            $table->string('passport', 10)->nullable()->default(null);
            $table->unsignedSmallInteger('origin_state')->default('1');
            $table->text('birth_town');
            $table->string('lga', 191);
            $table->unsignedSmallInteger('nationality')->default('1');

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
