<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    protected $primaryKey = 'id_pembayaran';

    protected $fillable = [
        'id_penyewaan',
        'status_bayar',
        'keterangan',
        'total_pembayaran',
        'tanggal_penyewaan',
    ];

    public function penyewaan()
    {
        return $this->belongsTo(Penyewaan::class, 'id_penyewaan');
    }
}