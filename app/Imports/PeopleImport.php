<?php

namespace App\Imports;

use App\Poeple;
use Maatwebsite\Excel\Concerns\ToModel;

class PeopleImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Poeple([
            //
        ]);
    }
}
