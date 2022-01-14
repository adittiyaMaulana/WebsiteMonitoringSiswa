<?php

namespace App\Imports;

use Illuminate\Validation\Rule;
use App\Models\Finansial;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class FinansialImport implements ToModel, WithStartRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Finansial([
            'id_siswa' => $row[0],
            'nama_bayaran' => $row[1],
            'jumlah' => $row[2],
            'jatuh_tempo' => $row[3],
            'status' => $row[4]
        ]);
    }
    public function rules(): array {
    return [
   '1' => Rule::unique('finansial','nama_bayaran'), // Table name, field in your db
    ];
    }
    public function customValidationMessages() {
        return [
        '1.unique' => 'Gagal Import, Data Duplikat!',
        ];
    }
    public function startRow(): int
    {
        return 2;
    }
}