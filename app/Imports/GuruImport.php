<?php

namespace App\Imports;

use App\Models\Guru;
use Maatwebsite\Excel\Concerns\ToModel;

class GuruImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Guru([
            'id_mapel' => $row['id_mapel'],
            'nama' => $row['nama'],
            'ttl' => $row['ttl'],
            'alamat' => $row['alamat'],
            'email' => $row['email']
        ]);
    }
}
