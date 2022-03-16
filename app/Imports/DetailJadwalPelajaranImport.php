<?php

namespace App\Imports;

use App\Models\DetailJadwalPelajaran;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class DetailJadwalPelajaranImport implements ToModel, WithStartRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DetailJadwalPelajaran([
            'id_siswa' => $row[0],
            'id_jadwal'=> $row[1],
            'id_mapel' => $row[2]
        ]);
    }
    public function rules(): array {
        return [
            '0' => ['required'],
            '1' => ['required'],
            '2' => ['required'],
        ];
    }
    public function customValidationMessages() {
        return [
            '0.required' => 'Gagal Import, Data Kosong!',
            '1.required' => 'Gagal Import, Data Kosong!',
            '2.required' => 'Gagal Import, Data Kosong!'
        ];
    }
    public function startRow(): int
    {
            return 2;
    }
}
