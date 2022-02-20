<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailFinansial extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_siswa',
        'id_finansial',
        'status',
        'jatuh_tempo'
    ];
     protected $table = "detail_finansial";
}
