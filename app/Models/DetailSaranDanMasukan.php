<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSaranDanMasukan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pengguna',
        'id_saran'
    ];
     protected $table = "detail_saran_dan_masukan";
}
