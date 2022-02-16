<?php

namespace Database\Seeders;

use App\Models\Club;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Database\Seeder;
use League\Csv\Reader;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::insert(SeedData::STUDENTS);
    }
}
