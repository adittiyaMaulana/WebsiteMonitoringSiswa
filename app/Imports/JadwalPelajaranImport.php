<?php

namespace App\Imports;

use App\Models\JadwalPelajaran;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class JadwalPelajaranImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new JadwalPelajaran([
            'jam_pelajaran' => $row[0],
            'hari' => $row[1]
        ]);
    }
    public function startRow(): int
    {
            return 2;
    }
}
