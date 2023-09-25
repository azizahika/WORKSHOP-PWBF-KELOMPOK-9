<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat_penyewaan extends Model
{
    protected $primaryKey = 'id_riwayatpenyewaan';

    protected $fillable = [
        'id_penyewaan',
        'id_mobil',
        'status_pembayaran',
        'total_biaya',
        'lokasi_pengambilan',
        'lokasi_pengembalian',
    ];

    public function penyewaan()
    {
        return $this->belongsTo(Penyewaan::class, 'id_penyewaan');
    }

    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'id_mobil');
    }
}
