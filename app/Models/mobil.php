<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{

    protected $primaryKey = 'id_mobil';

    protected $fillable = [
        'merk',
        'model',
        'tahun_produksi',
        'warna',
        'harga_sewaperhari',
        'status',
    ];

    public function riwayatHarga()
    {
        return $this->hasMany(RiwayatHarga::class, 'id_mobil');
    }

    public function riwayatPenyewaan()
    {
        return $this->hasMany(RiwayatPenyewaan::class, 'id_riwayat_penyewaan');
    }
}
