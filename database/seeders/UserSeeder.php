<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            [
                'username' => 'Admin',
                'name'=> 'Admin',
                'email'=> 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role'=> 'admin',
                'status'=> 'aktif',
                
            ],
            [
                'username' => 'Member',
                'name'=> 'Member',
                'email'=> 'member@gmail.com',
                'password' => Hash::make('password'),
                'role'=> 'member',
                'status'=> 'aktif',
                
            ],
            [
                'username' => 'User',
                'name'=> 'User',
                'email'=> 'user@gmail.com',
                'password' => Hash::make('password'),
                'role'=> 'user',
                'status'=> 'aktif',
                
            ],
        ]);
    }
}
