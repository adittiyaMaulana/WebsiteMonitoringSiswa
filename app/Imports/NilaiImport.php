<?php

namespace App\Imports;

use App\Models\DaftarNilai;
use Maatwebsite\Excel\Concerns\ToModel;

class NilaiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DaftarNilai([
            'id_siswa' => $row['id_siswa'],
            'id_mapel' => $row['id_mapel'],
            'nilai_tugas' => $row['nilai_tugas'],
            'nilai_uts' => $row['nilai_uts'],
            'nilai_uas' => $row['nilai_uas'],
            'semester' => $row['semester'],
            'kelas' => $row['kelas']
        ]);
    }
}
