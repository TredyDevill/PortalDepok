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
Route::get('/detail', function () {
    return view('opendata/detail');
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

Route::post('/tempatibadah', 'SearchController@searchti');


Route::get('/opendata/pendidikan', function(){
  return view('topik/pendidikan');
} );
Route::get('/opendata/kesehatan', function(){
  return view('topik/kesehatan');
} );
Route::get('/opendata/perekonomian', function(){
  return view('topik/perekonomian');
} );
Route::get('/opendata/fasilitasumum', function(){
  return view('topik/fasilitasumum');
} );
Route::get('/opendata/transportasi', function(){
  return view('topik/transportasi');
} );
Route::get('/opendata/sosial', function(){
  return view('topik/sosial');
} );
Route::get('/opendata/pariwisata', function(){
  return view('topik/pariwisata');
} );
Route::get('/opendata/olahraga', function(){
  return view('topik/olahraga');
} );
Route::get('/opendata/fasilitas', function(){
  return view('topik/fasilitas');
} );
