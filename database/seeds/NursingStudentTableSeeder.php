<?php

use Illuminate\Database\Seeder;

class NursingStudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('nursing_students')->insert([
        'mat_number' => '',
        'name' => 'NJOKU OKECHUKWU VALENTINE',
        'email' => 'student@nursing.nursing',
        'phone' => '07038616871',
        'current_year' => 1,
        'password' => bcrypt('student@nursing.nursing'),
      ]);
  }
}
