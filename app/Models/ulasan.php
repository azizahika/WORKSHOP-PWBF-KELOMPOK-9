<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ulasan extends Model
{
    protected $primaryKey = 'id_ulasan';

    protected $fillable = [
        'id_user',
        'deskripsi_ulasan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}


