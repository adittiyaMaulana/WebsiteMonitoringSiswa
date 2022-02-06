<?php

namespace App\Imports;

use App\Models\JadwalAkademikDanNonAkademik;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class KalenderAkademikImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new JadwalAkademikDanNonAkademik([
            'nama_kegiatan' => $row[0],
            'jadwal_kegiatan' => $row[1],
            'periode' => $row[2]
        ]);
    }
    public function startRow(): int
    {
            return 2;
    }
}
