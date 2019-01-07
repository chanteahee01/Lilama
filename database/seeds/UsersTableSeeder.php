<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $users = [
            [
            	'name' => 'Nguyen Thi Thu Ha',
            	'email' => 'thuha@gmail.com',
            	'password' => Hash::make('123456'),
            	'role' => 3
            ],
            [
            	'name' => 'Nguyen Thi Van',           	
            	'email' => 'thivan@gmail.com',
            	'password' => Hash::make('123456'),
            	'role' => 2
            ],
            [
            	'name' => 'Luong Ngoc Khanh',
            	'email' => 'admin@gmail.com',
            	'password' => Hash::make('123456'),
            	'role' => 1
            ],
        ];
         DB::table('users')->insert($users);
    }
}
