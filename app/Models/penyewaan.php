<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyewaan extends Model
{

    protected $primaryKey = 'id_penyewaan';

    protected $fillable = [
        'id_ulasan',
        'tanggal_penyewaan',
        'nama_penyewaan',
    ];

    public function ulasan()
    {
        return $this->belongsTo(Ulasan::class, 'id_ulasan');
    }

    public function pengembalian()
    {
        return $this->belongsTo(Pengembalian::class, 'id_pengembalian');
    }

    public function pengambilan()
    {
        return $this->belongsTo(Pengambilan::class, 'id_pengambilan');
    }

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class, 'id_pembayaran');
    }

    public function riwayat_penyewaan()
    {
        return $this->Hasmany(Riwayat_penyewaan::class, 'id_riwayat_penyewaan');
    }

    public function user()
    {
        return $this->Hasmany(User::class, 'id_user');
    }
}

