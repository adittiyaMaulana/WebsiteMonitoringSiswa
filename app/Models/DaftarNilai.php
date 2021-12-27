<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarNilai extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_siswa',
        'id_mapel',
        'nilai_tugas',
        'nilai_uts',
        'nilai_uas',
        'semester',
        'kelas',
    ];
     protected $table = "daftar_nilai";
}
