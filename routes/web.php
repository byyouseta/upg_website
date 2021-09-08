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

Route::get('/', function () {
    return view('website.about');
});
Route::get('/alur', function () {
    return view('website.alur');
});
Route::get('/upg', function () {
    return view('website.upg');
});
Route::get('/faq', function () {
    return view('website.faq');
});
// Route::get('/formulir', function () {
//     return view('website.formulir');
// });
Route::get('/formulir', 'WebController@formulir');
Route::get('/formulir/unduh/{id}', 'WebController@lihat');
Route::get('/film', function () {
    return view('website.video');
});
Route::get('/kontak', function () {
    return view('website.kontak');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//User Profil
Route::get('/profil', 'PelaporController@profil')->name('laporan');
Route::post('/profil/update/{id}', 'PelaporController@update');
Route::get('/password', 'PelaporController@password');
Route::post('/password/update/{id}', 'PelaporController@passupdate');
Route::get('/lapor', 'PelaporController@lapor');
Route::post('/lapor/store', 'PelaporController@store');
Route::get('/lapor/detail/{id}', 'PelaporController@detaillapor');
Route::get('/history/pelaporan', 'PelaporController@history');
Route::get('/lapor/manual', 'PelaporController@manual');
Route::post('/lapor/manual/store', 'PelaporController@manualstore');
Route::get('/lapor/manual/detail/{id}', 'PelaporController@detailmanual');
Route::get('/lapor/manual/lihat/{id}', 'PelaporController@view');
//ajax
Route::post('/getPenerimaan', 'PelaporController@getPenerimaan')->name('getPenerimaan');

Route::middleware('cekstatus')->group(function () {
    //Laporan
    Route::get('/laporan', 'LaporanController@index')->name('laporan');
    Route::get('/laporan/masuk', 'LaporanController@masuk');
    Route::get('/laporan/proses', 'LaporanController@proses');
    Route::get('/laporan/selesai', 'LaporanController@selesai');
    Route::get('/laporan/detail/{id}', 'LaporanController@detail');
    Route::get('/laporan/manual/detail/{id}', 'LaporanController@detailmanual');
    Route::get('/laporan/bukti/{id}', 'LaporanController@bukti');
    //Catatan
    Route::post('/catatan/{id}', 'CatatanController@store');
    //Catatan Manual
    Route::post('/catatan/manual/{id}', 'CatatanController@manualstore');

    //Pengguna
    Route::get('/pengguna', 'PenggunaController@index')->name('pengguna');
    Route::get('/pengguna/edit/{id}', 'PenggunaController@edit');
    Route::post('/pengguna/update/{id}', 'PenggunaController@update');
    Route::get('/pengguna/delete/{id}', 'PenggunaController@delete');

    //MasterdataPelaporan
    Route::get('/pelaporan', 'PelaporanController@index');
    Route::post('/pelaporan/store', 'PelaporanController@store');
    Route::get('/pelaporan/edit/{id}', 'PelaporanController@edit');
    Route::post('/pelaporan/update/{id}', 'PelaporanController@update');
    Route::get('/pelaporan/delete/{id}', 'PelaporanController@delete');
    //MasterdataPenerimaan
    Route::get('/penerimaan', 'PenerimaanController@index');
    Route::post('/penerimaan/store', 'PenerimaanController@store');
    Route::get('/penerimaan/edit/{id}', 'PenerimaanController@edit');
    Route::post('/penerimaan/update/{id}', 'PenerimaanController@update');
    Route::get('/penerimaan/delete/{id}', 'PenerimaanController@delete');
    //MasterdataPeristiwa
    Route::get('/peristiwa', 'PeristiwaController@index');
    Route::post('/peristiwa/store', 'PeristiwaController@store');
    Route::get('/peristiwa/edit/{id}', 'PeristiwaController@edit');
    Route::post('/peristiwa/update/{id}', 'PeristiwaController@update');
    Route::get('/peristiwa/delete/{id}', 'PeristiwaController@delete');

    //upload dokument
    Route::post('/dokumen/upload', 'DokumenController@upload');
    Route::get('/dokumen', 'DokumenController@index');
    Route::get('/dokumen/lihat/{id}', 'DokumenController@lihat');
    Route::get('/dokumen/hapus/{id}', 'DokumenController@delete');
});
