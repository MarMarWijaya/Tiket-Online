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
