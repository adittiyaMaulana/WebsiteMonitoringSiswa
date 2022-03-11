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
            '0' => ['required','numeric'],
            '1' => ['required'],
            '2' => ['required','unique:guru,nuptk'],
            '3' => ['required','date_format:Y-m-d'],
            '4' => ['required'],
            '5' => ['required','unique:guru,email']
        ];
    }
    public function customValidationMessages() {
        return [
           '0.numeric' => 'Gagal Import, Salah Format!',
           '1.required' => 'Gagal Import, Data Kosong!',
           '2.unique' => 'Gagal Import, Data Duplikat!',
           '3.date_format' => 'Gagal Import, Format Tanggal Salah!',
           '4.required' => 'Gagal Import, Data Kosong!',
           '5.unique' => 'Gagal Import, Data Duplikat!'
        ];
    }
    public function startRow(): int
    {
            return 2;
    }
}
