<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nuptk',
        'ttl',
        'alamat',
        'email'
    ];

    protected $table = "guru";
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
