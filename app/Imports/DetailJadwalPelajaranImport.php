<?php

namespace App\Imports;

use App\Models\DetailJadwalPelajaran;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DetailJadwalPelajaranImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DetailJadwalPelajaran([
            'id_siswa' => $row[0],
            'id_jadwal'=> $row[1],
            'id_mapel' => $row[2]
        ]);
    }
    public function startRow(): int
    {
            return 2;
    }
}
