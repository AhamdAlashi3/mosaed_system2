<?php

namespace App\Http\Controllers;

use App\Models\masaqat;
use App\Models\Masaqats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $halaqts      = DB::table('halaqts')->get()->count();
        $masaqats     = DB::table('masaqats')->get()->count();
        $masaqat = Masaqats::all();
        // $masaqatss =Masaqats::all();
        // $masaqatsss =masaqat::all();
        $teacherDatas = DB::table('teacher_datas')->get()->count();
        $studentDatas = DB::table('student_datas')->get()->count();
        $users        = DB::table('users')->get()->count();
        return view('index', compact('halaqts','teacherDatas','masaqats','studentDatas','users','masaqat'));
    }
}
