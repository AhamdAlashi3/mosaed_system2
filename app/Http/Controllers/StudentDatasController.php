<?php

namespace App\Http\Controllers;

use App\Models\StudentDatas;
use App\Models\masaqats;
use App\Models\halaqts;
use Illuminate\Http\Request;
use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Maatwebsite\Excel\Facades\Excel;

class StudentDatasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masaqat = masaqats::all();
        $halaqts = halaqts::all();
        //$TeacherDatas =StudentDatas::all();
        $studentDatas = StudentDatas::orderBy('id')->get();
        return view('studentDatas', compact('masaqat','halaqts','studentDatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $b_exists = studentDatas::where('email','=',$input['email'])->exists();
        if($b_exists){
            session()->flash('Error','لا يمكن ان يتكرر  البريد الالكتروني');
            return redirect('/studentDatas');
        }
        else{
         studentDatas::create([
            'masaqat'      => $request->masaqat,
            'halaqt'       => $request->halaqt,
            'ID_person'    =>$request->ID_person,
            'phone_number' =>$request->phone_number,
            'email'        =>$request->email,
            'Name'         =>$request->Name,
            'Date'         =>$request->Date,
            'Nationality'  =>$request->Nationality,
            //'created_at'    =>(Auth::user()->name),
        ]);
      session()->flash('Add','تم إضافة الطالــــــــب بنجاح');
      return redirect('/studentDatas');
    }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentDatas  $studentDatas
     * @return \Illuminate\Http\Response
     */
    public function show(StudentDatas $studentDatas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentDatas  $studentDatas
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentDatas $studentDatas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentDatas  $studentDatas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentDatas $studentDatas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentDatas  $studentDatas
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentDatas $studentDatas)
    {
        //
    }
    public function export()
    {
        //echo "Exporting";
        return Excel::download(new StudentExport, 'Student.xlsx');
    }

    public function store_import(Request $request){
        $file = $request->file('file');
        Excel::import(new StudentImport, $file);

      session()->flash('import','تم إضافة  إستيراد البيانات من الاكسل');
      return redirect('/studentDatas');
        //return back()->withStatus('Exisel file Importing ');
       //return $file;
    }

}
