<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


//homepage
Route::get('/', function () {
    return view('index');
});


//create pemohon
Route::get('create', function () {
    return view('create');
});


//senarai semakan ek
Route::get('senarai_semakan_ek', function () {
    return view('senarai_semakan_ek');
});

//senarai semakan ek tidak lengkap
Route::get('senarai_semakan_ek_tidak_lengkap', function () {
    return view('senarai_semakan_ek_tidak_lengkap');
});

//permohonan_hantar
Route::get('permohonan_hantar', function () {
    return view('permohonan_hantar');
});

//status proses
Route::get('status_proses', function () {
    return view('status_proses');
});


//status berjaya
Route::get('status_berjaya', function () {
    return view('status_berjaya');
});


//kemaskini permohonan
Route::get('kemaskini_permohonan', function () {
    return view('kemaskini_permohonan');
});


