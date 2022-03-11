<?php

namespace App\Imports;

use Illuminate\Validation\Rule;
use App\Models\OrangTua;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class OrangTuaImport implements ToModel, WithStartRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new OrangTua([
            'nama' => $row[0],
            'ttl' => $row[1],
            'alamat' => $row[2],
            'email' => $row[3]
        ]);
    }
    public function rules(): array {
        return [
            '0' => ['required'],
            '1' => ['required','date_format:Y-m-d'],
            '2' => ['required'],
            '3' => ['required','unique:orang_tua,email']
        ];
    }
    public function customValidationMessages() {
        return [
            '0.required' => 'Gagal Import, Data Kosong!',
            '1.required' => 'Gagal Import, Format Tanggal Salah!',
            '2.required' => 'Gagal Import, Data Kosong!',
            '3.unique' => 'Gagal Import, Data Duplikat!',
        ];
    }
    public function startRow(): int
    {
        return 2;
    }
}
