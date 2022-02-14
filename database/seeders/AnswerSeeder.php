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
        for ($i = 1; $i <= Student::count(); $i++) {
            Answer::factory()->count(1)->create(
                [
                    'student_id' => $i,
                    'date' => now()
                ]
            );
        }
    }
}
