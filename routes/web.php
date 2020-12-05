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

//Route::get('/link', 'namaFileController@namaFunction')

use App\Http\Controllers\Auth\LoginController;

Route::get('/pesan', 'ListKeretaController@index');
Route::post('/pesan', 'ListKeretaController@tampilkan_kereta');
Route::get('/', 'ListKeretaController@tampilanHome');
Route::post('/konfirmasi', 'KonfirmasiController@tampilkanPilihan');
Route::post('/checkout', 'KonfirmasiController@checkout');
Route::get('/checkout', 'KonfirmasiController@checkout');
Route::post('/percobaan', 'KonfirmasiController@validasiKursi');
Route::post('/validasi', 'KonfirmasiController@validasiAkhir');
// Route::get('/kursi', 'KonfirmasiController@checkout');
Route::get('/coba', 'ListKeretaController@cobak');
Route::get('/tentang', 'LainController@tentang');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@cek');
Route::get('/daftar', 'LoginController@daftar');
Route::post('/daftar', 'LoginController@daftarGo');
Route::get('/akun', 'LoginController@akun');
Route::get('/logout', 'LoginController@logout');
Route::get('/editAkun/{email}', 'LoginController@editAkun');
Route::post('/editAkun', 'LoginController@editAkunGo');