<?php

namespace App\Imports;

use Illuminate\Validation\Rule;
use App\Models\Nilai;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class NilaiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Nilai([
            'id_siswa' => $row[0],
            'id_mapel' => $row[1],
            'nilai_tugas' => $row[2],
            'nilai_uts' => $row[3],
            'nilai_uas' => $row[4],
            'semester' => $row[5],
            'kelas' => $row[6]
        ]);
    }
    public function rules(): array {
    return [
    ];
    }
    public function customValidationMessages() {
        return [
        ];
    }
    public function startRow(): int
    {
        return 2;
    }
}
