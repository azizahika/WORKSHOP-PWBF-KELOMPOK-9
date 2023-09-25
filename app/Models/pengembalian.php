<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengembalian extends Model
{
    protected $primaryKey = 'id_pengembalian';

    protected $fillable = [
        'id_penyewaan',
        'tanggal_pengembalian',
        'lokasi_pengembalian',
        'kondisi_mobil',
    ];

    public function penyewaan()
    {
        return $this->belongsTo(Penyewaan::class, 'id_penyewaan');
    }
}
