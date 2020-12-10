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
Route::post('/konfirmasiWithLogin', 'KonfirmasiController@tampilkanPilihanWithLogin');
Route::post('/checkout', 'KonfirmasiController@checkout');
Route::get('/checkout', 'KonfirmasiController@checkout');
Route::post('/pembayaran', 'KonfirmasiController@validasiKursi');
Route::post('/validasi', 'KonfirmasiController@validasiAkhir');
Route::post('/', 'HomeController@sendEmail');
// Route::get('/kursi', 'KonfirmasiController@checkout');
Route::get('/coba', 'ListKeretaController@cobak');
Route::get('/tentang', 'LainController@tentang');
Route::get('/loginUser', 'LoginController@index');
Route::post('/loginUser', 'LoginController@cek');
Route::get('/daftar', 'LoginController@daftar');
Route::post('/daftar', 'LoginController@daftarGo');
Route::get('/akun', 'LoginController@akun');
Route::get('/logoutUser', 'LoginController@logout');
Route::get('/editAkun/{email}', 'LoginController@editAkun');
Route::post('/editAkun', 'LoginController@editAkunGo');
Route::get('/editAkunPassword/{email}', 'LoginController@editAkunPassword');
Route::post('/editAkunPassword', 'LoginController@editAkunPasswordGo');

Route::post('/send-email', 'HomeController@sendEmail')->name('send.email');
Auth::routes();

Route::get('/email', 'HomeController@index')->name('email');

Auth::routes();

Route::get('/email', 'HomeController@index')->name('email');

//ADMIN Home & Logout
Route::get('/homeAdmin', 'AdminController@homeAdmin')->middleware('auth')->name('homeAdmin');
Route::get('/logout', 'AdminController@logout');

//ADMIN Stasiun
Route::get('/home', 'AdminController@home')->middleware('auth')->name('home');
Route::get('/tambah','AdminController@tambah')->middleware('auth')->name('tambah');
Route::post('/simpanStasiun','AdminController@simpan')->middleware('auth')->name('simpan');

Route::get('/hapus/{letak}','AdminController@hapus')->middleware('auth')->name('hapus');

Route::get('/edit/{letak}','AdminController@edit')->middleware('auth')->name('edit');
Route::get('/home/{letak}','AdminController@edit')->middleware('auth')->name('edit');

Route::post('/ubah','AdminController@ubah')->middleware('auth')->name('ubah');

//Admin Stok
Route::get('/stok', 'AdminController@stok')->middleware('auth')->name('stok');
Route::get('/tambahStok','AdminController@tambahStok')->middleware('auth')->name('tambahStok');
Route::post('/simpanStok','AdminController@simpanStok')->middleware('auth')->name('simpanStok');

Route::get('/hapusStok/{idStok}','AdminController@hapusStok')->middleware('auth')->name('hapusStok');

Route::post('/editStok','AdminController@editStok')->middleware('auth')->name('editStok');
Route::post('/stok/{idStok}','AdminController@editStok')->middleware('auth')->name('editStok');

Route::post('/ubahStok','AdminController@ubahStok')->middleware('auth')->name('ubahStok');

//Admin Gerbong
Route::get('/gerbong', 'AdminController@gerbong')->middleware('auth')->name('gerbong');
Route::get('/tambahGerbong','AdminController@tambahGerbong')->middleware('auth')->name('tambahGerbong');
Route::post('/simpanGerbong','AdminController@simpanGerbong')->middleware('auth')->name('simpanGerbong');

Route::get('/hapusGerbong/{idKelas}','AdminController@hapusGerbong')->middleware('auth')->name('hapusGerbong');

Route::post('/editGerbong','AdminController@editGerbong')->middleware('auth')->name('editGerbong');
Route::post('/gerbong/{idKelas}','AdminController@editGerbong')->middleware('auth')->name('editGerbong');

Route::post('/ubahGerbong','AdminController@ubahGerbong')->middleware('auth')->name('ubahGerbong');

//Admin Kereta
Route::get('/kereta', 'AdminController@kereta')->middleware('auth')->name('kereta');
Route::get('/tambahKereta','AdminController@tambahKereta')->middleware('auth')->name('tambahKereta');
Route::post('/simpanKereta','AdminController@simpanKereta')->middleware('auth')->name('simpanKereta');

Route::get('/hapusKereta/{idKereta}','AdminController@hapusKereta')->middleware('auth')->name('hapusKereta');

Route::get('/editKereta','AdminController@editKereta')->middleware('auth')->name('editKereta');
Route::post('/kereta/{idKereta}','AdminController@editKereta')->middleware('auth')->name('editKereta');

Route::post('/ubahKereta','AdminController@ubahKereta')->middleware('auth')->name('ubahKereta');
Route::post('/editKereta','AdminController@editKereta')->middleware('auth')->name('editKereta');

//Admin Pemesanan
Route::get('/pemesanan', 'AdminController@pemesanan')->middleware('auth')->name('pemesanan');
Route::get('/hapusPemesanan/{idPemesanan}','AdminController@hapusPemesanan')->middleware('auth')->name('hapusPemesanan');

Route::get('/detailPemesanan','AdminController@detailPemesanan')->middleware('auth')->name('detailPemesanan');
Route::post('/pemesanan/{idPemesanan}','AdminController@detailPemesanan')->middleware('auth')->name('detailPemesanan');

Route::post('/fixPemesanan','AdminController@fixPemesanan')->middleware('auth')->name('fixPemesanan');
Route::post('/detailPemesanan','AdminController@detailPemesanan')->middleware('auth')->name('detailPemesanan');