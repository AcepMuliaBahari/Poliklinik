<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pasien', 
        'id_dokter',
        'tanggal_periksa',
        'catatan',
        'biaya_periksa'
    ];
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }
    public function transaksiDetailPeriksa()
    {
        return $this->hasMany(TransaksiDetailPeriksa::class, 'id_periksa');
    }
   
   




}
