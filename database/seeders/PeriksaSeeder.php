<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriksaSeeder extends Seeder
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
                'id_dokter' => 1, 
                 'id_pasien' => 1, 
                 'tanggal_periksa' => Carbon::now(),
                 'obat'=> 'Obat sakit ',
                 'catatan' => 'Ini adalah catatan periksa pertama',
                
            ],
            [
                'id_dokter' => 2,    
                 'id_pasien' => 2,    
                 'tanggal_periksa' => Carbon::now(),
                 'obat'=> 'Obat sakit ',
                 'catatan' => 'Ini adalah catatan periksa kedua',
                
            ],
            [
                'id_dokter' => 3,    
                 'id_pasien' => 3,    
                 'tanggal_periksa' => Carbon::now(),
                 'obat'=> 'Obat sakit gigi',
                 'catatan' => 'Ini adalah catatan periksa ketiga',
                
            ],
            [
                'id_dokter' => 4,    
                 'id_pasien' => 4,    
                 'tanggal_periksa' => Carbon::now(),
                 'obat'=> 'Obat sakit ',
                 'catatan' => 'Ini adalah catatan periksa keempat',
                
            ],
            
        ];
        // Masukkan semua data id_dokter dan id_pasien ke dalam tabel "periksa" dalam satu operasi
        DB::table('periksas')->insert($data);
    }
    }

