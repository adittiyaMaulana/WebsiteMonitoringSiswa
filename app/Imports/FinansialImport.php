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
            'nama_bayaran' => $row[0],
            'jumlah' => $row[1]
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
