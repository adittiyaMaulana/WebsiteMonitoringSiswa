<?php

namespace App\Imports;

use App\Models\Finansial;
use Maatwebsite\Excel\Concerns\ToModel;

class FinansialImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Finansial([
            'id_siswa' => $row['id_siswa'],
            'nama_bayaran' => $row['nama_bayaran'],
            'jumlah' => $row['jumlah'],
            'jatuh_tempo' => $row['jatuh_tempo'],
            'status' => $row['status']
        ]);
    }
}
