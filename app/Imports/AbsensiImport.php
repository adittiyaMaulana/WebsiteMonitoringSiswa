<?php


namespace App\Imports;

use App\Models\Absensi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class AbsensiImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Absensi([
            'bulan' => $row[0],
            'kehadiran'=> $row[1],
            'alpa'=> $row[2],
            'sakit'=> $row[3],
            'izin' => $row[4],
            'semester' => $row[5]
        ]);
    }
    public function startRow(): int
    {
            return 2;
    }
}
