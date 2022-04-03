<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::insert([
            [
                'grade' => 1,
                'class' => 'A',
            ],
            [
                'grade' => 1,
                'class' => 'B',
            ],
            [
                'grade' => 1,
                'class' => 'C',
            ],
            [
                'grade' => 2,
                'class' => 'A',
            ],
            [
                'grade' => 2,
                'class' => 'B',
            ],
            [
                'grade' => 2,
                'class' => 'C',
            ],
            [
                'grade' => 3,
                'class' => 'A',
            ],
            [
                'grade' => 3,
                'class' => 'B',
            ],
            [
                'grade' => 3,
                'class' => 'C',
            ],
        ]);
    }
}
