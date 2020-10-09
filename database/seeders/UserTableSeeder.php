<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'BeatnikAdmin',
            'email' => 'beatnikadmin@gmail.com',
            'password' => bcrypt('beatnikadmin'),
        ]);
    }
}
