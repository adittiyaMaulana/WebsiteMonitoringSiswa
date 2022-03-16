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
    public function rules(): array {
        return [
            '0' => ['required'],
            '1' => ['required'],
            '2' => ['required'],
            '3' => ['required'],
            '4' => ['required'],
            '5' => ['required']
        ];
    }
    public function customValidationMessages() {
        return [
            '0.required' => 'Gagal Import, Data Kosong!',
            '1.required' => 'Gagal Import, Data Kosong!',
            '2.required' => 'Gagal Import, Data Kosong!',
            '3.required' => 'Gagal Import, Data Kosong!',
            '4.required' => 'Gagal Import, Data Kosong!',
            '5.required' => 'Gagal Import, Data Kosong!'
        ];
    }
    public function startRow(): int
    {
        return 2;
    }
}
