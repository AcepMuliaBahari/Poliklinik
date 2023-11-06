<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pasien', // Tambahkan id_pasien ke dalam daftar ini
        'id_dokter',
        'tanggal_periksa',
<<<<<<< HEAD
        'catatan',
        'obat',
=======
        'obat',
        'catatan',
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
    ];
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }
}
