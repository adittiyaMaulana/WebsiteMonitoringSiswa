<?php

namespace App\Imports;

use App\Models\DetailNilai;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DetailNilaiImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DetailNilai([
            'id_siswa' => $row[0],
            'id_nilai' => $row[1],
            'id_mapel' => $row[2]
        ]);
    }
    public function startRow(): int
    {
            return 2;
    }
}
