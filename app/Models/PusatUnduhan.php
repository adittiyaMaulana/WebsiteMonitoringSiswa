<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PusatUnduhan extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama',
        'ukuran'
    ];

    protected $table = "pusat_unduhan";
}
