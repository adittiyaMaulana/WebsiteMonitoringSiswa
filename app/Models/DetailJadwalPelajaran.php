<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailJadwalPelajaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_siswa',
        'id_jadwal',
        'id_mapel'
    ];
     protected $table = "detail_jadwal_pelajaran";
}
