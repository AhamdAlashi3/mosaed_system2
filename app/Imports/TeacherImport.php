<?php

namespace App\Imports;

use App\Models\TeacherDatas;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TeacherImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TeacherDatas([
            'id'           =>$row[0],
            'masaqat'      =>$row[1],
            'halaqt'       =>$row[2],
            'ID_person'    =>$row[3],
            'phone_number' =>$row[4],
            'email'        =>$row[5],
            'Name'         =>$row[6],
            'Date'         =>$row[7],
            'Nationality'  =>$row[8],
            //'password' => Hash::make('password')
          //  'masaqat'       => $row['1'],
           /* 'halaqt'        => $row['2'],
            'ID_person'     => $row['3'],
            'phone_number'  => $row['4'],
            'email'         => $row['5'],
            'Name'          => $row['6'],
            'Date'          => $row['7'],
            'Nationality'   => $row['8'],
            //'Name'    => $row[1],
            //'password' => Hash::make($row[2])*/
        ]);
    }
}
