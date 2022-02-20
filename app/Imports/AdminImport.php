<?php

namespace App\Imports;


use Illuminate\Validation\Rule;
use App\Models\Admin;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class AdminImport implements ToModel, WithStartRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Admin([
            'nama' => $row[0],
            'ttl' => $row[1],
            'alamat' => $row[2],
            'email' => $row[3]
        ]);
    }
    public function rules(): array {
    return [
   '3' => Rule::unique('admin','email'), // Table name, field in your db
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
