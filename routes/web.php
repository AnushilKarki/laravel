<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TablerateController;
use App\Http\Controllers\ImapController;
use App\Http\Controllers\RemainderController;
use App\Http\Controllers\StudentController;
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

Route::get('/',[StudentController::class,'studentdata'])->middleware('force')->name('studentdata');

Route::get('/premium',function () {
	return view('input');
});

Route::get('/student',function(){
    return view('addstudent');
})->middleware('auth');

Route::get('/addnewstudent',function(){
    return view('addnewstudent');
})->middleware('auth');
Route::get('/delete/student/{id}',[StudentController::class,'delete'])->name('deletestudent');
Route::get('/edit/student/{id}',[StudentController::class,'edit'])->name('editstudent');
Route::get('/view/student/{id}',[StudentController::class,'view'])->name('viewstudent');
Route::put('/update/student/{id}',[StudentController::class,'update'])->name('updatestudent');
Route::post('searchstudent',[StudentController::class,'searchStudent'])->name('searchstudent')->middleware('auth');
Route::post('addnewstudent',[StudentController::class,'addnewstudent'])->name('addnewstudent')->middleware('auth');
Route::get('studentdata',[StudentController::class,'studentdata'])->name('studentdata')->middleware('auth');
Route::get('/emailform',function(){
    return view('email');
});
Route::post('import-file', [TablerateController::class,'import'])->name('import');

Route::post('premium', [TablerateController::class,'premium'])->name('premium');

Route::post('addstudent',[StudentController::class,'add'])->name('addstudent')->middleware('auth');

Route::post('email',[ImapController::class,'emailreq'])->name('email')->middleware('auth');

// Route::post('premium','App\Http\Controllers\TablerateController@premium')->name('premium');

Route::get('/imap',[ImapController::class,'imap'])->name('imap');

Route::get('/export',[StudentController::class,'studentexport']);

Route::get('/export/{id}',[StudentController::class,'pdfexport'])->name('student.export');

Route::get('/new',function(){
return view('addApplicant');
});
Route::get('/applicant',function(){
    return view('newform');
});

Route::get('/studentform',function(){
    return view('studentform');
});
Route::post('store/ramainder/{id}',[RemainderController::class,'storeremainder'])->name('addremainder');
Route::put('edit/remainder/{id}',[RemainderController::class,'editremainder'])->name('editremainder');
Route::delete('delete/remainder/{id}',[RemainderController::class,'deleteremainder'])->name('deleteremainder');
Route::get('/remainder/userwise',[RemainderController::class,'getremainderuserwise'])->name('remainder.userwise');
Route::get('/remainder/studentwise/{id}',[RemainderController::class,'getremainderstudentwise'])->name('remainder.studentwise');
Route::get('remainder/edit/{id}',[RemainderController::class,'edit'])->name('editviewremainder');

route::post('/testcamera',[RemainderController::class,'testcamera'])->name('camera');