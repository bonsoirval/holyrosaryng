<?php

use Illuminate\Database\Seeder;

class MidwifeCandidateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('midwife_candidates')->insert([
        'name' => 'NJOKU OKECHUKWU VALENTINE',
        'email' => 'bonsoirval@gmail.com',
        'phone' => '07038616871',
        'password' => bcrypt('bonsoirval@gmail.com'),
      ]);
    }
}
