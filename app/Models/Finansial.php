<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finansial extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_siswa',
        'nama_bayaran',
        'jumlah',
        'jatuh_tempo'
    ];

    protected $table = "finansial";
}
