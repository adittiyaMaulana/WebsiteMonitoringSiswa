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
   	  '0' => ['required','numeric'],
   	  '1' => ['required','numeric'],
   	  '2' => ['required'],
      '3' => ['required','unique:profil_siswa,nis'],
      '4' => ['required','date_format:Y-m-d'],
      '5' => ['required'],
      '6' => ['required','numeric'],
   	];
	}
	public function customValidationMessages() {
	   return [
	      '0.numeric' => 'Gagal Import, Salah Format!',
	      '1.numeric' => 'Gagal Import, Salah Format!',
	      '2.required' => 'Gagal Import, Data Kosong!',
	      '3.unique' => 'Gagal Import, Data Duplikat!',
	      '4.date_format' => 'Gagal Import, Format Tanggal Salah!',
	      '5.required' => 'Gagal Import, Data Kosong!',
	      '6.numeric' => 'Gagal Import, Salah Format!',
	      
	   ];
	}
    public function startRow(): int
    {
        return 2;
    }
    
}
