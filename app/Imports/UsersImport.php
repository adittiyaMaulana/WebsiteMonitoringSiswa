<?php

namespace App\Imports;

use Illuminate\Validation\Rule;
use App\Models\Users;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class UsersImport implements ToModel, WithStartRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Users([
            'name' => $row[0],
            'email' => $row[1],
            'password' => $row[2],
            'role' => $row[3],
            'is_online' => $row[4],
            'last_activity' => $row[5]
        ]);
    }
    public function rules(): array {
        return [
            '0' => ['required'],
            '1' => ['required','unique:users,email'],
            '2' => ['required'],
            '3' => ['required'],
            '4' => ['required'],
            '5' => ['required']
        ];
    }
    public function customValidationMessages() {
        return [
            '0.required' => 'Gagal Import, Data Kosong!',
            '1.required' => 'Gagal Import, Data Duplikat!',
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
