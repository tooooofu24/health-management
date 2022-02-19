<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Student;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Answer::insert(SeedData::ANSWERS);
        Answer::factory()->count(1000)->create();
    }
}
