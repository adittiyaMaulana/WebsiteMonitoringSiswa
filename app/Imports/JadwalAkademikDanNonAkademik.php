<?php

namespace App\Imports;

use App\Models\JadwalAkademikDanNonAkademik;
use Maatwebsite\Excel\Concerns\ToModel;

class JadwalAkademikDanNonAkademikImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new JadwalAkademikDanNonAkademik([
            'nama_kegiatan' => $row['nama_kegiatan'],
            'jadwal_kegiatan' => $row['jadwal_kegiatan']
        ]);
    }
}
