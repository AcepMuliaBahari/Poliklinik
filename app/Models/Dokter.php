<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_dokter', 'alamat', 'no_hp',
    ];
    public function DataPeriksa()
    {
        return $this->hasMany(Periksa::class, 'id_dokter');
    }
}
