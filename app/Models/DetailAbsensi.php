<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailAbsensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_siswa',
        'id_absensi',
        'id_kelas'
    ];
     protected $table = "detail_absensi";
}
