<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class harga extends Model
{
    protected $primaryKey = 'id_harga';

    protected $fillable = [
        'harga',
    ];

    public function riwayat_harga()
    {
        return $this->belongsTo(Riwayat_harga::class, 'id_riwayat_harga');
    }
}

