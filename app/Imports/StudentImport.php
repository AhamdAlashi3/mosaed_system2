<?php

namespace App\Imports;

use App\Models\StudentDatas;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
            if (isset($row[0])) {
               session()->flash('import_error','لا يمكن تكرار البيانات');
               // return redirect()->back()->with('/studentDatas');
                return null;
            }
        return new StudentDatas([
            
            'id'           =>$row[0],
            'masaqat'      =>$row[1],
            'halaqt'       =>$row[2],
            'ID_person'    =>$row[3],
            'phone_number' =>$row[4],
            'email'        =>$row[5],
            'Name'         =>$row[6],
            'Date'         =>$row[7], 
            'Nationality'  =>$row[8],
        ]);
    }
}
