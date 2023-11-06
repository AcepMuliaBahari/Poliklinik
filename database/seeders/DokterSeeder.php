<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama_dokter' => 'Dr Angga',
                'alamat' => 'JL.Penyembuh sakit',
                'no_hp' => ' 083111111111',
                
            ],
            [
                'nama_dokter' => 'Dr Stone',
                'alamat' => 'JL.Soekarno',
                'no_hp' => '0822222222',
                
            ],
            [
                'nama_dokter' => 'Dr James',
                'alamat' => 'Jl.Perjuangan',
                'no_hp' => '08133333333',
                
            ],
            [
                'nama_dokter' => 'Dr Nita',
                'alamat' => 'Semarang Selatan',
                'no_hp' => '081444444444',
                
            ],
        ];
        // Masukkan semua data dokter ke dalam tabel "dokters" dalam satu operasi
        DB::table('dokters')->insert($data);
    }
}
