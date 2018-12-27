<?php
namespace App\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(SuperAdminTableSeeder::class);
        $this->call(CountriesSeeder::class);
        $this->call(CoursesSeederTable::class);
        $this->call(FeesPaymentsSeederTable::class);
        $this->call(FeesSeederTable::class);
        $this->call(GradesSeederTable::class);
        $this->call(MedLabAdminTableSeeder::class);
        $this->call(MedLabCandidateTableSeeder::class);
        $this->call(MedLabStudentTableSeeder::class);
        $this->call(MidwifeAdminTableSeeder::class);
        $this->call(MidwifeCandidateTableSeeder::class);
        $this->call(MidwifeStudentTableSeeder::class);
        $this->call(NextOfKinsSeederTable::class);
        $this->call(NursingAdminTableSeeder::class);
        $this->call(NursingCandidateTableSeeder::class);
        $this->call(NursingStudentTableSeeder::class);
        $this->call(ResultsTableSeeder::class);
        $this->call(SchoolsSeederTable::class);
        $this->call(StatesSeeder::class);
        $this->call(SuperAdminTableSeeder::class);
        $this->call(Workload::class);
        $this->call(::class);

        /*
        $this->call(StatesSeeder::class);
        $this->call(NursingCandidateTableSeeder::class);
        $this->call(MedLabCandidateTableSeeder::class);
        $this->call(SchoolsSeederTable::class);
        $this->call(NursingStudentTableSeeder::class);
        $this->call(MedlabStudentTableSeeder::class);
        $this->call(MidwifeStudentTableSeeder::class);
        //$this->call(MidwifeCandidateTableSeeder::class);
        $this->call(ResultsTableSeeder);
        */
    }
}
