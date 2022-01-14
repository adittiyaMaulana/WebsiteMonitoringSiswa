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
   '1' => Rule::unique('users','email'), // Table name, field in your db
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
