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
        Club::insert(SeedData::CLUBS);
    }
}
