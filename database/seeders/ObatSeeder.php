<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
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
                'nama_obat' => 'Tolak Linu',
                'kemasan' => 'set / botol',
                'harga' => '10000',
                
            ],
            [
                'nama_obat' => 'Paramex',
                'kemasan' => 'kapsul',
                'harga' => '7000',
                
            ],
            [
                'nama_obat' => 'OBH Flu dan Batuk',
                'kemasan' => 'btl 30 ml',
                'harga' => '15000',
                
            ],
            [
                'nama_obat' => 'diapet',
                'kemasan' => 'Tablet',
                'harga' => '6000',
                
            ],
            [
                'nama_obat' => 'Diazepam tablet 2 mg',
                'kemasan' => 'Tablet',
                'harga' => '6000',
                
            ],
            [
                'nama_obat' => 'Alprazolam tablet 0,25 mg',
                'kemasan' => 'ktk 10 x 10 tablet',
                'harga' => '64000',
                
            ],
            [
                'nama_obat' => 'Alopurinol tablet 100 mg',
                'kemasan' => 'ktk 10 x 10 tablet',
                'harga' => '16000',
                
            ],
            [
                'nama_obat' => 'Glukosa larutan infus 10 % steril',
                'kemasan' => 'btl 500 %',
                'harga' => '8000',  
            ],
            [
                'nama_obat' => 'Gliseril',
                'kemasan' => 'btl 100 ml',
                'harga' => '7000',  
            ],
            [
                'nama_obat' => 'Gliseril guaiakolat tablet 100 mg',
                'kemasan' => 'btl 100 tablet',
                'harga' => '13500',  
            ],
        ];
        // Masukkan semua data obat ke dalam tabel "dokters" dalam satu operasi
        DB::table('obats')->insert($data);
    }
    }

