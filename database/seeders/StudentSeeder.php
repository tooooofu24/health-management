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
        $reader = Reader::createFromPath(__DIR__ . '/students.csv', 'r');
        $records = $reader->getRecords();
        foreach ($records as $record) {
            // 1-A,1,五十嵐栞那,吹奏楽部
            $grade = substr($record[0], 0, 1);
            $class = substr($record[0], 2, 1);
            $grade = Grade::where('grade', $grade)->where('class', $class)->first();
            $number = $record[1];
            $name = $record[2];
            $club_name = $record[3];
            $club = Club::where('name', $club_name)->first();
            $student = new Student([
                'name' => $name,
                'number' => $number,
                'grade_id' => $grade->id,
                'club_id' => $club ? $club->id : null
            ]);
            $student->save();
        }
    }
}
