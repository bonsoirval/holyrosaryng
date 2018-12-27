<?php

use Illuminate\Database\Seeder;

class SchoolsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school')->insert([
          'name' => string('School Of Nursing'),
          'logo' => string('nursing_logo.png'),
          'motto' => string('We Care and God Heals')
        ]);

        DB::table('school')->insert([
          'name' => string('School Of Medical Laboratory Sciences'),
          'logo' => string('medlab_logo.png'),
          'motto' => string('We Care and God Heals')
        ]);

        DB::table('school')->insert([
          'name' => string('School Of Midwifery'),
          'logo' => string('midwifery_logo.png'),
          'motto' => string('We Care and God Heals')
        ]);
    }
}
