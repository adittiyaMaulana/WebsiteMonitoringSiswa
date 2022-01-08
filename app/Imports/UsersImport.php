<?php

namespace App\Imports;

use App\Models\Users;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Users([
            'name' => $row['name'],
            'email' => $row['email'],
            'role' => $row['role'],
            'password' => $row['password'],
            'is_online' => $row['is_online'],
            'last_activity' => $row['last_activity']
        ]);
    }
}
