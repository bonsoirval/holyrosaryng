<?php

use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('states')->insert([
        'name' => 'Andaman and Nicobar Islands',
        'country_id' => '101',
      ]);
    }
}
