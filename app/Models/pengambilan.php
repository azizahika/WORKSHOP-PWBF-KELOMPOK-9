<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengambilan extends Model
{
        protected $primaryKey = 'id_pengambilan';
    
        protected $fillable = [
            'id_penyewaan',
            'tanggal_pengambilan',
            'lokasi_pengambilan',
        ];
    
        public function penyewaan()
        {
            return $this->belongsTo(Penyewaan::class, 'id_penyewaan');
        }
    }
    
