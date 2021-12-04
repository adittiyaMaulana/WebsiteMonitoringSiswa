<?php

namespace App\Imports;

use App\Models\OrangTua;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class OrangTuaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new OrangTua([
            'nama'     => $row['nama'], 
            'ttl'     => $row['ttl'],
            'alamat'     => $row['alamat'],
            'email'    => $row['email']
        ]);
    }
}
