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

Route::get('/pesan', 'ListKeretaController@index');
Route::post('/pesan', 'ListKeretaController@tampilkan_kereta');
Route::get('/', 'ListKeretaController@tampilanHome');
Route::post('/konfirmasi', 'KonfirmasiController@tampilkanPilihan');
Route::post('/checkout', 'KonfirmasiController@checkout');
Route::get('/checkout', 'KonfirmasiController@checkout');
Route::post('/pembayaran', 'KonfirmasiController@validasiKursi');
Route::post('/validasi', 'KonfirmasiController@validasiAkhir');
Route::post('/validasi', 'HomeController@sendEmail');
// Route::get('/kursi', 'KonfirmasiController@checkout');
Route::get('/coba', 'ListKeretaController@cobak');
Route::get('/tentang', 'LainController@tentang');

Route::post('/send-email', 'HomeController@sendEmail')->name('send.email');
Auth::routes();

Route::get('/email', 'HomeController@index')->name('email');

Auth::routes();

Route::get('/email', 'HomeController@index')->name('email');
