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
        'catatan',
        'obat',
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
