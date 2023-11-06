<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
<<<<<<< HEAD
    {   
        $this->call([
            UserSeeder::class,
            DokterSeeder::class,
            PasienSeeder::class,
            PeriksaSeeder::class
    ]);
=======
    {
        $this->call([
            UserSeeder::class,
            PasienSeeder::class,
            DokterSeeder::class,
            PeriksaSeeder::class,
        ]);
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
<<<<<<< HEAD
=======

>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
    }
}
