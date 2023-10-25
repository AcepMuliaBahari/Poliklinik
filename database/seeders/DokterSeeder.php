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
                
            ],
        ];
        // Masukkan semua data dokter ke dalam tabel "dokters" dalam satu operasi
        DB::table('dokters')->insert($data);
    }
}
