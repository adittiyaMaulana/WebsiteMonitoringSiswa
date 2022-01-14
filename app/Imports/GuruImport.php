<?php

namespace App\Imports;

use Illuminate\Validation\Rule;
use App\Models\Guru;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class GuruImport implements ToModel, WithStartRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Guru([
            'id_mapel' => $row[0],
            'nama' => $row[1],
            'nuptk'=> $row[2],
            'ttl'=> $row[3],
            'alamat' => $row[4],
            'email' => $row[5]
        ]);
    }
    public function rules(): array {
        return [
            '3' => Rule::unique('guru','nuptk'), // Table name, field in your db
        ];
    }
    public function customValidationMessages() {
        return [
            '3.unique' => 'Gagal Import, Data Duplikat!',
        ];
    }
    public function startRow(): int
    {
            return 2;
    }
}
