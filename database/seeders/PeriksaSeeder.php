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
<<<<<<< HEAD
                 'obat'=> 'Paracetamol ',
                 'catatan' => ' Demam dan nyeri tubuh',
=======
                 'obat'=> 'Obat sakit ',
                 'catatan' => 'Ini adalah catatan periksa pertama',
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
                
            ],
            [
                'id_dokter' => 2,    
                 'id_pasien' => 2,    
                 'tanggal_periksa' => Carbon::now(),
<<<<<<< HEAD
                 'obat'=> 'Paramex ',
                 'catatan' => 'Pusing Keliling',
=======
                 'obat'=> 'Obat sakit ',
                 'catatan' => 'Ini adalah catatan periksa kedua',
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
                
            ],
            [
                'id_dokter' => 3,    
                 'id_pasien' => 3,    
                 'tanggal_periksa' => Carbon::now(),
<<<<<<< HEAD
                 'obat'=> 'Bodrek Flu dan Batuk',
                 'catatan' => 'Sakit Kepala dan Batuk',
=======
                 'obat'=> 'Obat sakit gigi',
                 'catatan' => 'Ini adalah catatan periksa ketiga',
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
                
            ],
            [
                'id_dokter' => 4,    
                 'id_pasien' => 4,    
                 'tanggal_periksa' => Carbon::now(),
<<<<<<< HEAD
                 'obat'=> 'Diapet ',
                 'catatan' => 'Diare M',
=======
                 'obat'=> 'Obat sakit ',
                 'catatan' => 'Ini adalah catatan periksa keempat',
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
                
            ],
            
        ];
        // Masukkan semua data id_dokter dan id_pasien ke dalam tabel "periksa" dalam satu operasi
        DB::table('periksas')->insert($data);
    }
<<<<<<< HEAD
}
=======
    }

>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
