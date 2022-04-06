<?php

use App\Http\Controllers\HalaqtsController;
use App\Http\Controllers\MasaqatController;
use App\Http\Controllers\MasaqatsController;
use App\Http\Controllers\StudentDatasController;
use App\Http\Controllers\TaqarerController;
use App\Http\Controllers\TeacherDatasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/password', function () {
    return view('auth.passwords.forgetpassword');
});

/* Stop register form web*/
//Route::get('register', [RegisterController::class, 'index']);

     //(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
//Auth::routes();

//Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Route::resource('masaqat', App\Http\Controllers\MasaqatController::class);
//Route::resource('masaqat', App\Http\Controllers\MasaqatController::class);
Route::resource('masaqat', App\Http\Controllers\MasaqatController::class);

Route::resource('masaqats', MasaqatsController::class);

Route::resource('taqarer', TaqarerController::class);

Route::resource('halaqts', HalaqtsController::class);

Route::resource('teacherDatas', TeacherDatasController::class);

Route::resource('studentDatas', StudentDatasController::class);


Route::get('export_Techaer', [TeacherDatasController::class, 'export']);

Route::get('export_Student', [StudentDatasController::class, 'export']);

Route::get('/import_Techaer', [TeacherDatasController::class, 'store_import']);

Route::get('/import_Student', [StudentDatasController::class, 'store_import']);
