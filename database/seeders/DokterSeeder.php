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
<<<<<<< HEAD
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
=======
                'nama_dokter' => 'Nama dokter 1',
                'alamat' => 'Alamat dokter 1',
                'no_hp' => ' 081',
                
            ],
            [
                'nama_dokter' => 'Nama dokter 2',
                'alamat' => 'Alamat dokter 2',
                'no_hp' => '082',
                
            ],
            [
                'nama_dokter' => 'Nama dokter 3',
                'alamat' => 'Alamat dokter 3',
                'no_hp' => '083',
                
            ],
            [
                'nama_dokter' => 'Nama dokter 4',
                'alamat' => 'Alamat dokter 4',
                'no_hp' => '084',
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
                
            ],
        ];
        // Masukkan semua data dokter ke dalam tabel "dokters" dalam satu operasi
        DB::table('dokters')->insert($data);
    }
}
