<?php

namespace App\Imports;

use Illuminate\Validation\Rule;
use App\Models\Kelas;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class KelasImport implements ToModel, WithStartRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kelas([
            'nama_kelas' => $row[0],
            'kelas' => $row[1]
        ]);
    }
    public function rules(): array {
        return [
            '0' => ['required'],
            '1' => ['required']
        ];
    }
    public function customValidationMessages() {
        return [
            '0.required' => 'Gagal Import, Data Kosong!',
            '1.required' => 'Gagal Import, Data Kosong!'
        ];
    }
    public function startRow(): int
    {
        return 2;
    }
}
