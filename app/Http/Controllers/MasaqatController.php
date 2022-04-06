<?php

namespace App\Http\Controllers;

use App\Models\masaqat;
//use App\Models\departments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasaqatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masaqat = masaqat::all();
        //$masaqat = masaqat::LIMIT('3')->get();
        $masaqat = masaqat::orderBy('id')->get();
        return view('masaqat.masaqat', compact('masaqat'));
        //return view('masaqat');
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

        // $arrayTostring=implode(',',$request->input('Day'));
        // $input['Day']=$arrayTostring;

        $b_exists = masaqat::where('masaq_name','=',$input['masaq_name'])->exists();

        if($b_exists){
            session()->flash('Error',' لا يمكن ان يتكرر رقم المساق و ايضاً اسم المساق');
            return redirect('/masaqats');
        }else {
        masaqat::create([
            // $input,
            'id'       => $request->id,
            'masaq_name'       => $request->masaq_name,
            'Date_start'       => $request->Date_start,
            'Date_end'       => $request->Date_end,
            'Day'  =>$request->Day,
        ]);
      session()->flash('Add','تم إضافة المساق بنجاح');
      return redirect('/masaqats');
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\masaqat  $masaqat
     * @return \Illuminate\Http\Response
     */
    public function show(masaqat $masaqat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\masaqat  $masaqat
     * @return \Illuminate\Http\Response
     */
    public function edit(masaqat $masaqat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\masaqat  $masaqat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, masaqat $masaqat)
    {
      //echo "update";
      return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\masaqat  $masaqat
     * @return \Illuminate\Http\Response
     */
    public function destroy(masaqat $masaqat ,request $request)
    {
        return $request;
    }
}
