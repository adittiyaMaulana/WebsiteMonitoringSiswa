<?php

namespace App\Imports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Siswa([
            'id_kelas' => $row['id_kelas'],
            'id_orang_tua' => $row['id_orang_tua'],
            'nama'     => $row['nama'], 
            'ttl'     => $row['ttl'],
            'alamat'     => $row['alamat'],
            'semester'    => $row['semester']
        ]);
    }
}
