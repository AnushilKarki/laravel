<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TablerateController;
use App\Http\Controllers\ImapController;
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
    return view('welcome');
});

Route::get('/premium',function () {
	return view('input');
});
Route::get('/emailform',function(){
    return view('email');
});
Route::post('import-file', [TablerateController::class,'import'])->name('import');

Route::post('premium', [TablerateController::class,'premium'])->name('premium');

Route::post('email',[ImapController::class,'emailreq'])->name('email');

// Route::post('premium','App\Http\Controllers\TablerateController@premium')->name('premium');

Route::get('/imap',[ImapController::class,'imap'])->name('imap');