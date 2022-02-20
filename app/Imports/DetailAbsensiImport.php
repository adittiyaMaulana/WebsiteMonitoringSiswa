<?php

namespace App\Imports;

use App\Models\DetailAbsensi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DetailAbsensiImport implements ToModel, WithStartRow
{
     /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DetailAbsensi([
            'id_siswa' => $row[0],
            'id_absensi' => $row[1],
            'id_kelas' => $row[2]
        ]);
    }
    public function startRow(): int
    {
            return 2;
    }
}
