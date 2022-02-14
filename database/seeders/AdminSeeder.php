<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin([
            'email' => env('ADMIN_USER_EMAIL'),
            'password' => Hash::make(env('ADMIN_USER_PASSWORD')),
        ]);
        $admin->save();
    }
}
