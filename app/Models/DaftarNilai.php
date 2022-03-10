<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarNilai extends Model
{
    use HasFactory;

    protected $fillable = [
        'nilai_tugas',
        'nilai_uts',
        'nilai_uas',
        'nilai_rata',
        'semester',
        'kelas',
    ];
     protected $table = "daftar_nilai";
}
