<?php

use Illuminate\Database\Seeder;

class NursingCandidateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('nursing_candidates')->insert([
        'name' => 'NJOKU OKECHUKWU VALENTINE',
        'email' => 'candidate@nursing.nursing',
        'phone' => '07038616871',
        'password' => bcrypt('candidate@nursing.nursing'),
      ]);
    }
}
