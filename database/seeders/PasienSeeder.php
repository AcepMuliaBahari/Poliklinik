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
                
            ],
           
        ];
        // Masukkan semua data pasien ke dalam tabel "pasiens" dalam satu operasi
        DB::table('pasiens')->insert($data);
    }
}
