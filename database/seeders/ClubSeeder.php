<?php

namespace Database\Seeders;

use App\Models\Club;
use Illuminate\Database\Seeder;
use League\Csv\Reader;

class ClubSeeder extends Seeder
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
        $data = [];
        foreach ($records as $record) {
            if (in_array($record[3], $data)) {
                continue;
            }
            if (in_array($record[3], ['なし', '', '未定'])) {
                continue;
            }
            $data[] = $record[3];
            $club = new Club();
            $club->name = $record[3];
            $club->save();
        }
    }
}
