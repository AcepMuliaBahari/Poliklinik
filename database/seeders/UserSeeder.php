<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03

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
<<<<<<< HEAD
                'username' => 'Admin',
                'name'=> 'Admin',
                'email'=> 'admin@gmail.com',
                'password' => Hash::make('password'),
=======
                'name'=> 'Admin',
                'email'=> 'admin@gmail.com',
                'password'=> bcrypt('password'),
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
                'role'=> 'admin',
                'status'=> 'aktif',
                
            ],
            [
<<<<<<< HEAD
                'username' => 'Member',
                'name'=> 'Member',
                'email'=> 'member@gmail.com',
                'password' => Hash::make('password'),
=======
                'name'=> 'Member',
                'email'=> 'member@gmail.com',
                'password'=> bcrypt('password'),
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
                'role'=> 'member',
                'status'=> 'aktif',
                
            ],
            [
<<<<<<< HEAD
                'username' => 'User',
                'name'=> 'User',
                'email'=> 'user@gmail.com',
                'password' => Hash::make('password'),
=======
                'name'=> 'User',
                'email'=> 'user@gmail.com',
                'password'=> bcrypt('password'),
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
                'role'=> 'user',
                'status'=> 'aktif',
                
            ],
        ]);
    }
}
