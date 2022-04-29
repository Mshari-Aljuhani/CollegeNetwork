<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'name' => 'Admin1',
            'phoneNumber' => '05551',
            'email' => 'Admin1@gmail.com',
            'isAdmin' => true,
            'password' => Hash::make('Admin@1'),
        ]);
        DB::table('users')->insert([
            'name' => 'Admin2',
            'phoneNumber' => '05552',
            'email' => 'Admin2@gmail.com',
            'isAdmin' => true,
            'password' => Hash::make('Admin@2'),
        ]);
        DB::table('users')->insert([
            'name' => 'Admin3',
            'phoneNumber' => '05553',
            'email' => 'Admin3@gmail.com',
            'isAdmin' => true,
            'password' => Hash::make('Admin@3'),
        ]);
    }
}
