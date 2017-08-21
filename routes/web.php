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
    return view('welcome');
});

Route::get('/opendata', function () {
    return view('opendata');
});

Route::get('/data', function () {
    return view('opendata/data');
});
Route::get('/organisasi', function () {
    return view('opendata/organisasi');
});
Route::get('/tentang', function () {
    return view('opendata/tentang');
});
Route::get('/topik', function () {
    return view('opendata/topik');
});

Route::get('/bencana', function(){
  return view('topik/bencana');
} );
Route::get('/kependudukan', function(){
  return view('topik/kependudukan');
} );
Route::get('/kesehatan', function(){
  return view('topik/kesehatan');
} );
Route::get('/keuangan', function(){
  return view('topik/keuangan');
} );
Route::get('/pariwisata', function(){
  return view('topik/pariwisata');
} );
Route::get('/pekerjaan', function(){
  return view('topik/pekerjaan');
} );
Route::get('/pendidikan', function(){
  return view('topik/pendidikan');
} );
Route::get('/sosial', function(){
  return view('topik/sosial');
} );
