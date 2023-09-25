<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat_harga extends Model
{
   
    protected $primaryKey = 'id_riwayatharga';

    protected $fillable = [
        'id_mobil',
        'tanggal_perubahanharga',
        'harga_baru',
    ];

    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'id_mobil');
    }

    public function harga()
    {
        return $this->hasMany(Harga::class, 'id_harga');
    }
}

