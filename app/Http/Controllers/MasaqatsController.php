<?php

namespace App\Http\Controllers;

use App\Models\masaqat;
use App\Models\Masaqats;
use Illuminate\Http\Request;

class MasaqatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masaqat = masaqats::all();
        //$masaqat = masaqat::LIMIT('3')->get();
        $masaqat = masaqats::orderBy('id')->get();
        return view('masaqats', compact('masaqat'));
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
    //     $input = $request->all();
    //     $b_exists = masaqats::where('masaq_name','=',$input['masaq_name'])->exists();
    //     if($b_exists){
    //         session()->flash('Error',' لا يمكن ان يتكرر رقم المساق و ايضاً اسم المساق');
    //         return redirect('/masaqats');
    //     }else {
    //     $arrayTostring=implode(',',$request->input('Day'));
    //     $input['Day']=$arrayTostring;
    //     masaqats::create([
    //         'id'       => $request->id,
    //         'masaq_name'       => $request->masaq_name,
    //         'Date_start'       => $request->Date_start,
    //         'Date_end'       => $request->Date_end,
    //         'Day'  =>$request->Day,
    //     ]);
    //   session()->flash('Add','تم إضافة المساق بنجاح');
    //   return redirect('/masaqats');
    //  }


        $inputValue = $request->all();
        $arrayTostring =implode(',',$request->input('Day'));
        $inputValue['Day']=$arrayTostring;
        $sucess=Masaqats::create($inputValue);
        if($sucess){
            $request->session()->flash('states','sucess');
        }else{
            $request->session()->flash('states','error');
        }
        session()->flash('Add','تم إضافة المساق بنجاح');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Masaqats  $masaqats
     * @return \Illuminate\Http\Response
     */
    public function show(Masaqats $masaqats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Masaqats  $masaqats
     * @return \Illuminate\Http\Response
     */
    public function edit(Masaqats $masaqats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Masaqats  $masaqats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Masaqats $masaqats)
    {
        $validateData = $request-> validate([
            'section'=> 'required|unique:masaqats|max:255',

        ],
        [
            'section.required' => 'يرجى إدخال إسم الحلقة',

        ]);
        //$id = masaqat::where('section', $request->section)->first()->id;
        $masaqats = masaqats::findOrFail($request->id);
        $masaqats->update([
            'section' => $request->section,

        ]);
        session()->flash('Edit','تم التعديل  المساق بنجاج');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Masaqats  $masaqats
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masaqats $masaqats ,Request $request)
    {
        $id = $request->id;
        masaqats::find($id)->delete();
        session()->flash('delete','تم مسح  المساق بنجاح');
        return redirect('/masaqats');
    }
}
