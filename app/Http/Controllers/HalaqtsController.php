<?php

namespace App\Http\Controllers;

use App\Models\halaqts;
use App\Models\masaqats;
use Illuminate\Http\Request;
use DB;

class HalaqtsController extends Controller
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
        return view('halaqts', compact('masaqat','halaqts'));
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
      /* $validateData = $request-> validate([
            'masaqat_id' => 'required|unique:masaqats|max:255',

        ],
        [
            'masaqat_id.required' =>'يرجى إدخال المساق',
            //'section.unique'   =>'لا يمكن ان يتكرر المساق',

        ]);*/
        $input_one = $request->masaqat_id;
        //$id_exists = halaqts::where('masaqat','=',$input_one['masaqat_id'])->null();
        if( $input_one= null){
            session()->flash('Error','يجب إختيار المساق');
            return redirect('/halaqts');
        }
        $input = $request->all();
        //$name = $request->name;
        //$masaqat_id = $request->masaqat;
        $b_exists = halaqts::where('name','=',$input['name'])->exists();
        if($b_exists){
            session()->flash('Error','لا يمكن ان يتكرر  اسم الحلقة');
            return redirect('/halaqts');
        }
     //if($b_exists ='null'){
       //     session()->flash('Error','لا يمكن أن يكون الفورم فارغ ! يرجى ملء البيانات');
         //   return redirect('/halaqts');
        //}

        else {
            halaqts::create([
            'masaqat_id' => $request->masaqat,
            'name'       => $request->name,
            'section'    => $request->section,
            //'created_at'    =>(Auth::user()->name),
        ]);
      session()->flash('Add','تم إضافة الحلقة بنجاح');
      return redirect('/halaqts');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\halaqts  $halaqts
     * @return \Illuminate\Http\Response
     */
    public function show(halaqts $halaqts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\halaqts  $halaqts
     * @return \Illuminate\Http\Response
     */
    public function edit(halaqts $halaqts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\halaqts  $halaqts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, halaqts $halaqts)
    {
        $validateData = $request-> validate([
            'name'=> 'required|unique:halaqts|max:255',

        ],
        [
            'name.required' => 'يرجى إدخال إسم الحلقة',

        ]);
        //$id = masaqat::where('section', $request->section)->first()->id;
        $halaqts = halaqts::findOrFail($request->id);
        $halaqts->update([
            'name' => $request->name,

        ]);
        session()->flash('Edit','تم التعديل  الحلقة بنجاح');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\halaqts  $halaqts
     * @return \Illuminate\Http\Response
     */
    public function destroy(halaqts $halaqts,Request $request)
    {
        $id = $request->id;
        halaqts::find($id)->delete();
        session()->flash('delete','تم مسح الحلقة بنجاح');
        return redirect('/halaqts');
    }
}
