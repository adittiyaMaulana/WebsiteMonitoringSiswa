<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailNilai extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_siswa',
        'id_nilai',
        'id_mapel'
    ];
     protected $table = "detail_nilai";
}
