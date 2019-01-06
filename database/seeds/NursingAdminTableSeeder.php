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
      DB::table('nursing_admin')->insert([
        'name' => 'NJOKU OKECHUKWU VALENTINE',
        'email' => 'nursing_admin@nursing_admin.nursing_admin',
        'phone' => '07038616871',
        'password' => bcrypt('nursing_admin@nursing_admin.nursing_admin'),
      ]);
    }
}
