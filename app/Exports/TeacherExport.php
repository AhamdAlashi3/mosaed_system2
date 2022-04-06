<?php

namespace App\Exports;

use App\Models\TeacherDatas;
use Maatwebsite\Excel\Concerns\FromCollection;

class TeacherExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TeacherDatas::all();
    }
}
