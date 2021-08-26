<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'f_name' => 'super',
            'l_name' => 'admin',
            'email' => '610112230006@bru.ac.th',
            'category_id' => '0',
            'type' => 'admin',
            'password' => Hash::make('12345678'),
        ]);
    }
}
