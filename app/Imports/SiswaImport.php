<?php

namespace App\Imports;

use Illuminate\Validation\Rule;
use App\Models\ProfilSiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class SiswaImport implements ToModel, WithStartRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ProfilSiswa([
            'id_kelas' => $row[0],
            'id_orang_tua' => $row[1],
            'nama'     => $row[2], 
            'nis'     => $row[3], 
            'ttl'     => $row[4],
            'alamat'     => $row[5],
            'semester'    => $row[6]
        ]);
    }
   	public function rules(): array {
   	return [
      '3' => Rule::unique('profil_siswa', 'nis'), // Table name, field in your db
   	];
	}
	public function customValidationMessages() {
	   return [
	      '3.unique' => 'Gagal Import, Data Duplikat!',
	   ];
	}
    public function startRow(): int
    {
        return 2;
    }
    
}
