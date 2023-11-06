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
<<<<<<< HEAD
                'nama_pasien' => 'Doni',
                'alamat' => 'Jl.Hos Cokroaminoto',
                'no_hp' => ' 082111111111',
                
            ],
            [
                'nama_pasien' => 'Andi',
                'alamat' => 'Jl.Panadaran',
                'no_hp' => '0831212121212',
                
            ],
            [
                'nama_pasien' => 'Sinta',
                'alamat' => 'Jl.Nakula No 21',
                'no_hp' => '082333333333',
                
            ],
            [
                'nama_pasien' => 'Nanda',
                'alamat' => 'Jl.Pemrograman NO 01',
                'no_hp' => '081444444444',
=======
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
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
                
            ],
           
        ];
        // Masukkan semua data pasien ke dalam tabel "pasiens" dalam satu operasi
        DB::table('pasiens')->insert($data);
    }
}
