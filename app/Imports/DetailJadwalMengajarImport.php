<?php

namespace App\Imports;

use App\Models\DetailJadwalMengajar;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DetailJadwalMengajarImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DetailJadwalMengajar([
            'id_guru' => $row[0],
            'id_jadwal' => $row[1],
            'id_mapel' => $row[2],
            'id_kelas' => $row[3],
        ]);
    }
    public function startRow(): int
    {
            return 2;
    }
}
