<?php

namespace App\Imports;

use App\Models\JadwalMengajar;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class JadwalMengajarImport implements ToModel, WithStartRow
{
     /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new JadwalMengajar([
            'hari' => $row[0],
            'jam_pelajaran' => $row[1]
        ]);
    }
    public function startRow(): int
    {
            return 2;
    }
}
