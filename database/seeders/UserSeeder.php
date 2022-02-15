<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use League\Csv\Reader;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = Student::all();
        $filePath = __DIR__ . '/password.csv';
        $reader = Reader::createFromPath($filePath, 'r');
        $records = $reader->getRecords();
        $emails = [];
        foreach ($records as $record) {
            $student =  $students->where('name', $record[0])->first();
            $user = new User();
            $user->fill([
                'student_id' => $student->id,
                'email' => $record[1],
                'password' => Hash::make($record[2]),
            ])->save();
        }
    }
}
