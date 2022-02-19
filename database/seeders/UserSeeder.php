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
        // User::insert(SeedData::USERS);
        $user = new User([
            'email' => 'user@email.com',
            'password' => Hash::make('password'),
            'student_id' => 1
        ]);
        $user->save();
    }
}
