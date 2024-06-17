<?php

namespace App\Exports;

use App\Models\Bien;
use Maatwebsite\Excel\Concerns\FromCollection;

class BienesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bien::all();
    }
}