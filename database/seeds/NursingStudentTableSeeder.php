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
        'email' => 'bonsoirval@gmail.com',
        'phone' => '07038616871,
        'current_year' => 1,
        'password' => bcrypt('bonsoirval@gmail.com'),
      ]);

      DB::table('nursing_students')->insert([
        'mat_number' => '',
        'name' => 'NJOKU OKECHUKWU VALENTINE',
        'email' => 'bonsoirval@gmal.com',
        'phone' => '07038616871,
        'current_year' => 2,
        'password' => bcrypt('bonsoirval@gmail.com'),
      ]);

      DB::table('nursing_students')->insert([
        'mat_number' => '',
        'name' => 'NJOKU OKECHUKWU VALENTINE',
        'email' => 'bonsoirval@gmail.com',
        'phone' => '07038616871,
        'current_year' => 3,
        'password' => bcrypt('bonsoirval@gmai.com'),
      ]);
    }
}
