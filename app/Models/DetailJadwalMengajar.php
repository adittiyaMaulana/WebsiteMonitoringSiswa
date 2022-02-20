<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailJadwalMengajar extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_guru',
        'id_jadwal',
        'id_mapel',
        'id_kelas'
    ];
     protected $table = "detail_jadwal_mengajar";
}
