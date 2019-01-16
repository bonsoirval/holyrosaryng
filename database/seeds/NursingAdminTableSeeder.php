<?php

use Illuminate\Database\Seeder;

class NursingAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('nursing_admins')->insert([
        'name' => 'NJOKU OKECHUKWU VALENTINE',
        'email' => 'nursingadmin@nursingadmin.nursingadmin',
        'phone' => '07038616871',
        'password' => bcrypt('nursingadmin@nursingadmin.nursingadmin'),
      ]);
    }
}
