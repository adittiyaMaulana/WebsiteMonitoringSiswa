<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalAkademikDanNonAkademik extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kegiatan',
        'jadwal_kegiatan',
        'periode'
    ];

    protected $table = "jadwal_akademik";
}
