<?php


namespace App\Imports;

use App\Models\Absensi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class AbsensiImport implements ToModel, WithStartRow, WithValidation
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
    public function rules(): array {
        return [
            '0' => ['required'],
            '1' => ['required'],
            '2' => ['required'],
            '3' => ['required'],
            '4' => ['required'],
            '5' => ['required']
        ];
    }
    public function customValidationMessages() {
        return [
            '0.required' => 'Gagal Import, Data Kosong!',
            '1.required' => 'Gagal Import, Data Kosong!',
            '2.required' => 'Gagal Import, Data Kosong!',
            '3.required' => 'Gagal Import, Data Kosong!',
            '4.required' => 'Gagal Import, Data Kosong!',
            '5.required' => 'Gagal Import, Data Kosong!',
        ];
    }
    public function startRow(): int
    {
            return 2;
    }
}
