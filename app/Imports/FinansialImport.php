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
            //
        ]);
    }
}
