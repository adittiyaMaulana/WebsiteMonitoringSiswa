<?php

namespace App\Imports;

use Illuminate\Validation\Rule;
use App\Models\DaftarNilai;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class NilaiImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DaftarNilai([
            'nilai_tugas' => $row[0],
            'nilai_uts' => $row[1],
            'nilai_uas' => $row[2],
            'nilai_rata' => $row[3],
            'semester' => $row[4],
            'kelas' => $row[5]
        ]);
    }
    public function startRow(): int
    {
        return 2;
    }
}
