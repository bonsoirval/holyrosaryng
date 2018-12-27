<?php

use Illuminate\Database\Seeder;

class CoursesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //////////////////////////////Nursing Year One//////////////////////////////
      DB::table('courses')->insert([
        'course_title' => 'State and Society',
        'course_code' => 'GST102',
        'workload' => '2',
        'school_id' => 1,
        'year_id' => 1,
        'semester' => 'first',
      ]);

      DB::table('courses')->insert([
        'course_title' => 'State and Society',
        'course_code' => 'GST103',
        'workload' => '2',
        'school_id' => 1,
        'year_id' => 1,
        'semester' => 'second',
      ]);
      //////////////////////////Nursing Year Two//////////////////////////
      DB::table('courses')->insert([
        'course_title' => 'State and Society',
        'course_code' => 'GST102',
        'workload' => '2',
        'school_id' => 1,
        'year_id' => 2,
        'semester' => 'first',
      ]);

      DB::table('courses')->insert([
        'course_title' => 'State and Society',
        'course_code' => 'GST103',
        'workload' => '2',
        'school_id' => 1,
        'year_id' => 2,
        'semester' => 'second',
      ]);

      //////////////////////////Nursing Year Three//////////////////////////
      DB::table('courses')->insert([
        'course_title' => 'State and Society',
        'course_code' => 'GST102',
        'workload' => '2',
        'school_id' => 1,
        'year_id' => 3,
        'semester' => 'first',
      ]);

      DB::table('courses')->insert([
        'course_title' => 'State and Society',
        'course_code' => 'GST103',
        'workload' => '2',
        'school_id' => 1,
        'year_id' => 3,
        'semester' => 'second',
      ]);


      //////////////////////////////Medlab Year One//////////////////////////////
      DB::table('courses')->insert([
        'course_title' => 'State and Society',
        'course_code' => 'GST102',
        'workload' => '2',
        'school_id' => 2,
        'year_id' => 1,
        'semester' => 'first',
      ]);

      DB::table('courses')->insert([
        'course_title' => 'State and Society',
        'course_code' => 'GST103',
        'workload' => '2',
        'school_id' => 2,
        'year_id' => 1,
        'semester' => 'second',
      ]);
      //////////////////////////Medlab Year Two//////////////////////////
      DB::table('courses')->insert([
        'course_title' => 'State and Society',
        'course_code' => 'GST102',
        'workload' => '2',
        'school_id' => 2,
        'year_id' => 2,
        'semester' => 'first',
      ]);

      DB::table('courses')->insert([
        'course_title' => 'State and Society',
        'course_code' => 'GST103',
        'workload' => '2',
        'school_id' => 2,
        'year_id' => 2,
        'semester' => 'second',
      ]);

      //////////////////////////Medlab Year Three//////////////////////////
      DB::table('courses')->insert([
        'course_title' => 'State and Society',
        'course_code' => 'GST102',
        'workload' => '2',
        'school_id' => 2,
        'year_id' => 3,
        'semester' => 'first',
      ]);

      DB::table('courses')->insert([
        'course_title' => 'State and Society',
        'course_code' => 'GST103',
        'workload' => '2',
        'school_id' => 2,
        'year_id' => 3,
        'semester' => 'second',
      ]);


      //////////////////////////////Midwife Year One//////////////////////////////
      DB::table('courses')->insert([
        'course_title' => 'State and Society',
        'course_code' => 'GST102',
        'workload' => '2',
        'school_id' => 3,
        'year_id' => 1,
        'semester' => 'first',
      ]);

      DB::table('courses')->insert([
        'course_title' => 'State and Society',
        'course_code' => 'GST103',
        'workload' => '2',
        'school_id' => 3,
        'year_id' => 1,
        'semester' => 'second',
      ]);
      //////////////////////////Midwife Year Two//////////////////////////
      DB::table('courses')->insert([
        'course_title' => 'State and Society',
        'course_code' => 'GST102',
        'workload' => '2',
        'school_id' => 3,
        'year_id' => 2,
        'semester' => 'first',
      ]);

      DB::table('courses')->insert([
        'course_title' => 'State and Society',
        'course_code' => 'GST103',
        'workload' => '2',
        'school_id' => 3,
        'year_id' => 2,
        'semester' => 'second',
      ]);

      //////////////////////////Midwife Year Three//////////////////////////
      DB::table('courses')->insert([
        'course_title' => 'State and Society',
        'course_code' => 'GST102',
        'workload' => '2',
        'school_id' => 3,
        'year_id' => 3,
        'semester' => 'first',
      ]);

      DB::table('courses')->insert([
        'course_title' => 'State and Society',
        'course_code' => 'GST103',
        'workload' => '2',
        'school_id' => 3,
        'year_id' => 3,
        'semester' => 'second',
      ]);



    }
}
