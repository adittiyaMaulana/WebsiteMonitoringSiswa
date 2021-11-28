<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilSiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kelas',
        'id_orang_tua',
        'nama',
        'ttl',
        'alamat',
        'semester'
    ];

    protected $table = "profil_siswa";
}
