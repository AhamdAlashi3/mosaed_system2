<?php

namespace App\Http\Controllers;

use App\Models\TeacherDatas;
use App\Models\masaqats;
use App\Models\halaqts;
use App\Models\User;
use Illuminate\Http\Request;
use App\Exports\TeacherExport;
use App\Imports\TeacherImport;
use Maatwebsite\Excel\Facades\Excel;


use Auth;

class TeacherDatasController extends Controller
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
        //$TeacherDatas =TeacherDatas::all();
        $TeacherDatas = TeacherDatas::orderBy('id','DESC')->LIMIT('10')->get();
        return view('teacherDatas', compact('masaqat','halaqts','TeacherDatas'));
       // return view('');
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
        $b_exists = teacherdatas::where('email','=',$input['email'])->exists();
        if($b_exists){
            session()->flash('Error','لا يمكن ان يتكرر  البريد الالكتروني');
            return redirect('/teacherDatas');
        }
        else{
        teacherdatas::create([
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
      session()->flash('Add','تم إضافة  المعلم بنجاح');
      return redirect('/teacherDatas');
    }}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeacherDatas  $teacherDatas
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherDatas $teacherDatas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeacherDatas  $teacherDatas
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherDatas $teacherDatas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeacherDatas  $teacherDatas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeacherDatas $teacherDatas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeacherDatas  $teacherDatas
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherDatas $teacherDatas)
    {
        //
    }
    public function export()
    {
        //echo "Exporting";
        return Excel::download(new TeacherExport, 'Teacher.xlsx');
    }

    public function importForm(){
        return view('teacherDatas');
    }

    public function store_import(Request $request){

        $file = $request->file('file');
        Excel::import(new TeacherImport, $file);
        session()->flash('import','تم إضافة  إستيراد البيانات من الاكسل');
        return redirect('/teacherDatas');
       // return back()->withStatus('Exisel file Importing ');
       //return $file;
    }


    public function import(Request $request)
    {
        Excel::import(new TeacherImport, $request->file);

       return redirect('teacherDatas')->with('success', 'All good!');
       //return "Import Succesfuly";
       //echo "Import";
      // dd('$request');
    }
}
