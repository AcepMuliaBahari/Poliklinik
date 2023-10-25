<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
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
                'nama_pasien' => 'Nama Pasien 1',
                'alamat' => 'Alamat Pasien 1',
                'no_hp' => ' 084',
                
            ],
            [
                'nama_pasien' => 'Nama Pasien 2',
                'alamat' => 'Alamat Pasien 2',
                'no_hp' => '083',
                
            ],
            [
                'nama_pasien' => 'Nama Pasien 3',
                'alamat' => 'Alamat Pasien 3',
                'no_hp' => '082',
                
            ],
            [
                'nama_pasien' => 'Nama Pasien 4',
                'alamat' => 'Alamat Pasien 4',
                'no_hp' => '081',
                
            ],
           
        ];
        // Masukkan semua data pasien ke dalam tabel "pasiens" dalam satu operasi
        DB::table('pasiens')->insert($data);
    }
}
