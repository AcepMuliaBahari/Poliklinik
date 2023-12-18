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
                
                 'catatan' => 'Nyeri Otot',
                 'biaya_periksa'=> '200000'
                
            ],
            [
                'id_dokter' => 2,    
                 'id_pasien' => 2,    
                 'tanggal_periksa' => Carbon::now(),
                 
                 'catatan' => 'Pusing Keliling',
                 'biaya_periksa'=> '90000'
                
            ],
            [
                'id_dokter' => 3,    
                 'id_pasien' => 3,    
                 'tanggal_periksa' => Carbon::now(),
                 
                 'catatan' => 'Sakit Kepala dan Batuk',
                 'biaya_periksa'=> '50000'
                
            ],
            [
                'id_dokter' => 4,    
                 'id_pasien' => 4,    
                 'tanggal_periksa' => Carbon::now(),
               
                 'catatan' => 'Diare M',
                 'biaya_periksa'=> '100000'
                
                
            ],
            
        ];
        // Masukkan semua data id_dokter dan id_pasien ke dalam tabel "periksa" dalam satu operasi
        DB::table('periksas')->insert($data);
    }
}
