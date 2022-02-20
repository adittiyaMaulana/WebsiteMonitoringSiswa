<?php

namespace App\Imports;

use App\Models\DetailFinansial;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DetailFinansialImport implements ToModel, WithStartRow
{
     /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DetailFinansial([
            'id_siswa' => $row[0],
            'id_finansial' => $row[1],
            'status' => $row[2],
            'jatuh_tempo' => $row[3]
        ]);
    }
    public function startRow(): int
    {
            return 2;
    }
}
