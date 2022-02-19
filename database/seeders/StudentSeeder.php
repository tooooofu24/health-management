<?php

namespace Database\Seeders;

use App\Models\Club;
use App\Models\Grade;
use App\Models\Student;
use Faker\Factory;
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
        // ダミーデータで名前を上書き
        $faker = Factory::create('ja_JP');
        foreach (Student::all() as $student) {
            $student->name = $faker->name;
            $student->save();
        }
    }
}
