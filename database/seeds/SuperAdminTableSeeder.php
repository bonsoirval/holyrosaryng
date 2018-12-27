<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class SuperAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
          'name' => 'NJOKU OKECHUKWU VALENTINE',
          'email' => 'bonsoirval@gmail.com',
          'phone' => '07038616871',
          'password' => bcrypt('bonsoirval@gmail.com'),
        ]);
    }
}
