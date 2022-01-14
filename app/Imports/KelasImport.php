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
   '0' => Rule::unique('kelas','nama_kelas'), // Table name, field in your db
    ];
    }
    public function customValidationMessages() {
        return [
        '0.unique' => 'Gagal Import, Data Duplikat!',
        ];
    }
    public function startRow(): int
    {
        return 2;
    }
}
